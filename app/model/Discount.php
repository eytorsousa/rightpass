<?php
namespace App\Model;

use CoffeeCode\DataLayer\DataLayer;

class Discount extends DataLayer{
  public function __construct(){
    parent::__construct("discount", ["discount_name", "discount_type", "discount_percent", "start_date", "end_date"]);
  }
}

?>
