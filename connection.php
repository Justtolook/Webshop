<?php
  class Db {
    private static $instance = NULL;

    private function __construct() {}

    private function __clone() {}

    public static function getInstance() {
      if (!isset(self::$instance)) {
		//self::$instance = mysqli_connect('localhost', 'root', '');
		  
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        self::$instance = new PDO('mysql:host=localhost;dbname=hlammert_ws', 'root', '', $pdo_options);
      }
      return self::$instance;
    }
  }
?>