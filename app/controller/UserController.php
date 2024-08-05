<?php
namespace App\Controllers;

use App\Model\User;

class UserController{
  public function getAll(){
    $users = (new User())->find()->fetch(true);

    echo json_encode($users);
  }

  public function show($id){
    $user = (new User())->findById($id);

    if(!$user){
      http_response_code(404);
      echo json_encode(["message" => "User not found. Probably doesnt exist"]);
      return;
    }else{
      echo json_encode($user);
    }
  }

  public function store(){
    $data = json_decode(file_get_contents('php://input'), true);
    $user = new User();

    $user->username = $data['username'];
    $user->email = $data['email'];
    $user->cpf = $data['cpf'];
    $user->userpassword = $data['userpassword'];
    $user->first_name = $data['first_name'];
    $user->last_name = $data['last_name'];

    if($user->save()){
      http_response_code(201);
      echo json_encode($user);
    }else{
      http_response_code(400);
      echo json_encode(["message"=>"Error unexpected, User cannot be created"]);
    }
  }

  public function update($id){
    $data = json_decode(file_get_contents('php://input'), true);
    $user = (new User())->findById($id);

    if(!$user){
      http_response_code(404);
      echo json_encode(["message"=>"User not found"]);
      return;
    }else{
      $user->username = $data['username'] ?? $user->username;
      $user->email = $data['email'] ?? $user->email;
      $user->cpf = $data['cpf'] ?? $user->cpf;
      $user->userpassword = $data['userpassword'] ?? $user->userpassword;
      $user->first_name = $data['first_name'] ?? $user->first_name;
      $user->last_name = $data['last_name'] ?? $user->last_name;
    }

    if($user->save()){
      echo json_encode($user);
    }else{
      http_response_code(400);
      echo json_encode(["message"=>"Error unexpected, User cannot be updated"]);
    }
    
  }

  public function destroy($id){
    $user = (new User())->findById($id);
    if(!$user){
      http_response_code(404);
      echo json_encode(["message"=>"User not found"]);
      return;
    }
    if($user->destroy()){
      http_response_code(201);
      echo json_encode(["message"=>"User deleted"]);
    }else{
      http_response_code(400);
      echo json_encode(["message"=>"Error unexpected, User cannot be deleted"]);
    }
  }
}

?>
