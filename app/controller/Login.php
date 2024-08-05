<?php
namespace App\Controllers;

use App\Model\User;
use App\Services\Session;

class Login{

  protected $usermodel;


  public function __construct(User $usermodel) {
    $this->usermodel = $usermodel;
  }

  public function login($username, $password): bool{

    $user = $this->usermodel->find("username = :name", "name=$username");

    if($user != NULL && password_verify($password, $user->userpassword)){
      Session::setSession('user_id', $user->id);
      Session::setSession('is_logged', true);
      return true;
    }else{
      return false;
    }
    
  }

  public function logout(){
    Session::destroySession();
  }
}
?>
