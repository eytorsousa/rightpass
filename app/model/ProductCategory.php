<?php
namespace App\Model;

use CoffeeCode\DataLayer\DataLayer;

class ProductCategory extends DataLayer{
  public function __construct(){
    parent::__construct("product_category", ["category_name"], "id", false);
  } 
}
