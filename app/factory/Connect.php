<?php
//require __DIR__ . "/../../vendor/autoload.php";

//use CoffeeCode\DataLayer\Connect;

//$conn = Connect::getInstance();
//$error = Connect::getError();

//if($error){
//  echo $error->getMessage();
//  die();
//}

  const DATA_LAYER_CONFIG = [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "ecommerce",
    "username" => "thiago",
    "passwd" => "MyPassword@123",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
  ];
?>
