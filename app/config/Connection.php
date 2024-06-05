<?php

// connection singleton
class Connection extends PDO {
  private static $connection;

  private function __construct() {
	  parent::__construct(
      "mysql:host=" . $_ENV["DB_HOST"] . ";dbname=" . $_ENV["DB_NAME"] , $_ENV["DB_USER"], $_ENV["DB_PASS"]);
  }

  // return connection
  public static function getConnection() {
    if(self::$connection) {
      return self::$connection;
    }else {
      self::$connection = new Connection();
      return self::$connection;
    }
  }
}

?>
