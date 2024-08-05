<?php
namespace App\Model;

use CoffeeCode\DataLayer\DataLayer;

class OrderDetail extends DataLayer{
  public function __construct(){
    parent::__construct("order_details", ["total"]);
  }
  public function items(){
    return (new OrderItem())->find("order_id = :order_id", "order_id={$this->id}")->fetch(true);
  }
}

?>
