<?php
namespace App\Model;

use CoffeeCode\DataLayer\DataLayer;

class Product extends DataLayer{
  public function __construct(){
    parent::__construct("shopping_session", ["product_name", "SKU", "category_id", "inventory_id", "price", "discount_id"]);
  }

}
?>
