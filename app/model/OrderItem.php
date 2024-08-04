<?php
namespace App\Model;

use CoffeeCode\DataLayer\DataLayer;

class OrderItem extends DataLayer{
  public function __construct(){
    parent::__construct("order_items", ["quantity"]);
  }
}

?>
