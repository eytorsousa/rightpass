<?php
namespace App\Model;

use CoffeeCode\DataLayer\DataLayer;

class UserPayment extends DataLayer{
  public function __construct(){
    parent::__construct("user_payment", ["user_id", "payment_type", "amount"]);
  }
}

?>
