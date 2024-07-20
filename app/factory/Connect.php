<?php
    class Route {
        public static $user = "root";
        public static $password = "";
        public static $connect = null;

        private static function Connect(){
            try {
                self::$connect = new PDO('mysql:host=localhost;dbname=;', self::$user, self::$password);
            } catch (Exception $err){
                echo 'Error: ' . $err->getMessage();
                die;
            }
            return self::$connect;
        }

        public function getConn(){
            return self::Connect();
        }
    }
