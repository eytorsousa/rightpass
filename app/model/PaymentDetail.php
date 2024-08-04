<?php
namespace App\Model;

use CoffeeCode\DataLayer\DataLayer;

class Product extends DataLayer{
  public function __construct(){
    parent::__construct("payment_details", ["order_id", "amount", "provider", "status"]);
  }
}

?>
