<?php
namespace App\Controllers;

use App\Model\OrderDetail;
use App\Model\OrderItem;

class UserController{
  public function show($id){
    $order = (new OrderDetail())->findById($id);

    echo json_encode($order);

    if($order){
      $items = $order->items();

      $orderItems = [];
      
      if($items){
        foreach($items as $item){
          $product = $item->product();
          $orderItems[] = [
            "product_name" => $product ? $product->product_name : null,
            "quantity" => $item->quantity,
            "price" => $item->price
          ];
        }
      }
      $orderData = [
        "id" => $order->id,
        "user_id" => $order->user_id,
        "created_at" => $order->created_at,
        "items" => $orderItems
      ];

      echo json_encode($orderData);

    }else{
      http_response_code(404);
      echo json_encode(["message"=>"Order not found"]);

    }
    

  }

  public function store(){
    $data = json_decode(file_get_contents('php://input'), true);
    $order = new OrderDetail();

    $order->user_id = $data['user_id'];
    $order->created_at = date("Y-m-d H:i:s");
    
    if($order->save()){
      foreach($data['items'] as $itemData){
        $item = new OrderItem();
        $item->order_id = $order->id;
        $item->product_id = $itemData['product_id'];
        $item->quantity = $itemData['quantity'];
        $item->price = $itemData['price'];
        $item->save();
      }

      http_response_code(201);
      echo json_encode(['message'=>'Order created successfully', 'order_id'=>$order->id]);
    }else{
      http_response_code(400);
      echo json_encode(['message'=>'Error unexpected, order cannot be created', 'errors'=>$order->fail()]);
    }

  }

  public function update($id){
    $data = json_decode(file_get_contents('php://input'), true);
    $order = new OrderDetail($id);

    if($order){
      $order->user_id = $data['user_id'] ?? $order->user_id;
      $order->created_at = $data['created_at'] ?? $order->created_at;

      if($order->save()){
        (new OrderItem())->delete("order_id = :order_id", "order_id={$this->id}");
        foreach ($data['items'] as $itemData) {
          $item = new OrderItem();
          $item->order_id = $order->id;
          $item->product_id = $itemData['product_id'];
          $item->quantity = $itemData['quantity'];
          $item->price = $itemData['price'];
          $item->save();
        }

        http_response_code(201);
        echo json_encode(['message' => 'Order updated successfully', 'order_id' => $order->id]);
      }else{
        http_response_code(400);
        echo json_encode(['message' => 'Error unexpected, Order cannot be updated', 'errors' => $order->fail()]);

      }
    }else{
      http_response_code(404);
      echo json_encode(['message' => 'Error unexpected, Order not found']);
    }


  }
    
}


?>
