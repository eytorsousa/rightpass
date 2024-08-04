<?php
namespace App\Model;

use CoffeeCode\DataLayer\DataLayer;

class User extends DataLayer{
  public function __construct(){
    parent::__construct("users", ["username", "email", "cpf", "userpassword"]);
    
  }
}

?>
