<?php
namespace App\Controllers;

use App\Model\Product;

class ProductController{
  public function getAll(){
    $products = (new Product())->find()->fetch(true);
    
    $result = [];

    if($products){
      foreach($products as $product){
        $inventory = $product->inventory();
        $category = $product->category();

        $productData = [
          'id' => $product->id,
          'product_name' => $product->product_name,
          'SKU' => $product->SKU,
          'product_description' => $product->product_description,
          'price' => $product->price,
          'category' => $category ? $category->category_name : null,
          'qunatity' => $inventory ? $inventory->quantity : null
        ];
        $result[] = $productData;
      }
    }

    echo json_encode($result);
  }

  public function show($id){
    $product = (new Product())->findById($id);

    if(!$product){
      http_response_code(404);
      echo json_encode(["message" => "Product not found. Probably doesnt exist"]);
      return;
    }else{
      $inventory = $product->inventory();
      $category = $product->category();

      $productData = [
          'id' => $product->id,
          'product_name' => $product->product_name,
          'SKU' => $product->SKU,
          'product_description' => $product->product_description,
          'price' => $product->price,
          'category' => $category ? $category->category_name : null,
          'qunatity' => $inventory ? $inventory->quantity : null
      ];

      echo json_encode($productData);
    }
  }

  public function store(){
    $data = json_decode(file_get_contents('php://input'), true);
    $product = new Product();

    $product->product_name = $data['product_name'] ?? null;
    $product->SKU = $data['SKU'] ?? null;
    $product->product_description = $data['product_description'] ?? null;
    $product->category_id = $data['category_id'] ?? null;
    $product->inventory_id = $data['inventory_id'] ?? null;
    $product->price = $data['price'] ?? null;
    $product->discount_id = $data['discount_id'] ?? null;

    if($product->save()){
      http_response_code(201);
      echo json_encode([
        "message"=>"Product created",
        "product"=>$product

      ]);
    }else{
      http_response_code(400);
      echo json_encode([
        "message"=>"Error unexpected, Product cannot be created",
        "errors"=>$product->fail()

      ]);
    }
  }

  public function update($id){
    $data = json_decode(file_get_contents('php://input'), true);
    $product = (new Product())->findById($id);

    if(!$product){
      http_response_code(404);
      echo json_encode(["message"=>"Product not found"]);
      return;
    }else{
      $product->product_name = $data['product_name'] ?? null;
      $product->SKU = $data['SKU'] ?? null;
      $product->product_description = $data['product_description'] ?? null;
      $product->category_id = $data['category_id'] ?? null;
      $product->inventory_id = $data['inventory_id'] ?? null;
      $product->price = $data['price'] ?? null;
      $product->discount_id = $data['discount_id'] ?? null;
    }

    if($product->save()){
      http_response_code(201);
      echo json_encode([
        "message" => "Product updated",
        "product" => $product
      ]);
    }else{
      http_response_code(400);
      echo json_encode([
        "message"=>"Failed to update product",
        "errors"=>$product->fail()
      ]);
    } 
  }

  public function destroy($id){
    $product = (new Product())->findById($id);
    if(!$product){
      http_response_code(404);
      echo json_encode(["message"=>"Product not found"]);
      return;
    }
    if($product->destroy()){
      http_response_code(201);
      echo json_encode(["message"=>"Product deleted"]);
    }else{
      http_response_code(400);
      echo json_encode(["message"=>"Error unexpected, Product cannot be deleted", "errors"=> $product->fail()]);
    }
  }
}

?>
