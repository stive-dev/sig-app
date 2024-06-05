<?php

require_once __ROOT_PATH__ . "/app/config/Connection.php";

class Model extends PDO {
  protected Connection $connection;
  
  public function __construct() {
    $this->connection = Connection::getConnection();
  }

  public function select() {}
  public function insert() {}
  public function update() {}
  public function delete() {}
}

?>
