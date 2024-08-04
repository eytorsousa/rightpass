<?php
namespace App\Services;

class Session{
  public static function startSession(){
    if(session_status() == PHP_SESSION_NONE){
      session_start();
    }
  }

  public static function setSession($key, $value){
    self::startSession();
    $_SESSION[$key] = $value;
  }

  public static function getSession($key){
    self::startSession();
    if(isset($_SESSION[$key])){
      return $_SESSION[$key];
    }else{
      return null;
    }
  }

  public static function deleteSession($key){
    self::startSession();
    if(isset($_SESSION[$key])){
      unset($_SESSION[$key]);
    }
  }

  public static function destroySession(){
    self::startSession();
    session_destroy();
  }
}


?>
