<?php
namespace App\Model;

use CoffeeCode\DataLayer\DataLayer;

class ProductInventory extends DataLayer{
  public function __construct(){
    parent::__construct("product_inventory", ["quantity"], "id", false);
  }
}
