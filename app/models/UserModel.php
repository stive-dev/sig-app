<?php

require_once "Model.php";

class UserModel extends Model {
  public function __construct() {
    parent::__construct();
  }

  public function select() {
    $query = $this->connection->prepare("SELECT * FROM usuario");
    $query->execute();
    
    return $query->fetch(PDO::FETCH_OBJ);
  }
}

?>
