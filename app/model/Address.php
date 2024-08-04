<?php
namespace App\Model;

use CoffeeCode\DataLayer\DataLayer;

class Address extends DataLayer {
  public function __construct(){
    parent::__construct("user_address", ["user_id"]);
  }
  
}

?>
