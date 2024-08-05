<?php
namespace App\Model;

use CoffeeCode\DataLayer\DataLayer;

class Product extends DataLayer{
  public function __construct(){
    parent::__construct("product", ["product_name", "SKU", "category_id", "inventory_id", "price", "discount_id"]);
  }

  public function inventory(){
    return (new ProductInventory())->findById($this->inventory_id);
  }

  public function category(){
    return (new ProductCategory())->findById($this->category_id);
  }
}

?>
