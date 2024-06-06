<?php

require_once __ROOT_PATH__ . "/app/config/Connection.php";

class Model extends PDO {
  protected Connection $connection;
  protected array $fields_values;
  protected array $fields;
  protected string $table;
  
  public function __construct(array $fields_values = [], string $table = "") {
    $this->connection = Connection::getConnection();
    $this->fields_values = $fields_values;
    $this->table = $table;
    $this->fields = [];

    $query = $this->connection->prepare("DESC $this->table");
    $query->execute();

    while($object = $query->fetch(self::FETCH_OBJ)) {
      array_push($this->fields, $object->Field);
    }
  }

  public function select() {
    $query = $this->connection->prepare("SELECT * FROM $this->table");
    $query->execute();
    return $query->fetchAll(self::FETCH_OBJ);
  }
  
  public function insert() {
    $sql = "INSERT INTO $this->table(";

    for($i = 0; $i < count($this->fields); $i++) {
      if($i == 0) {
        $sql = $sql . $this->fields[$i];
      }else {
        $sql = $sql . ", " . $this->fields[$i];
      }
    }

    $sql = $sql . ") VALUES(";
    
    for($i = 0; $i < count($this->fields); $i++) {
      if($i == 0) {
        $sql = $sql . "\"" . $this->fields_values[$i]. "\"";
      }else {
        $sql = $sql . ", " . "\"" . $this->fields_values[$i]. "\"";
      }
    }

    $sql = $sql . ")";

    $query = $this->connection->prepare($sql);
    $query->execute();
  }
  
  public function update() {
    $sql = "UPDATE $this->table SET ";

    for($i = 0; $i < count($this->fields); $i++) {
      if($i == 0) {
        $sql = $sql . $this->fields[$i] . "=" . "\"" .$this->fields_values[$i] . "\"";
      }else {
        $sql = $sql . ", " . $this->fields[$i] . "=" . "\"" . $this->fields_values[$i] . "\"";
      }
    }

    $sql = $sql . " WHERE " . $this->fields[0] . "=" . "\"" . $this->fields_values[0] . "\"";

    $query = $this->connection->prepare($sql);
    $query->execute();
  }
  
  public function delete() {
    $sql = "DELETE FROM $this->table WHERE " . $this->fields[0] . "=" . "\"" . $this->fields_values[0] . "\"";
    $query = $this->connection->prepare($sql);
    $query->execute();
  }

  public function find($key) {
    $sql = "SELECT * FROM $this->table WHERE " . $this->fields[0] . "=" . "\"" . $key . "\"" . " LIMIT 1";
    $query = $this->connection->prepare($sql);
    $query->execute();
    return $query->fetch(self::FETCH_OBJ);
  }

  public function define($fields_values) {
    $this->fields_values = $fields_values;
  }
}

?>
