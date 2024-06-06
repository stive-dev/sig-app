<?php

require_once "Model.php";

class UserModel extends Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function select()
  {
    $query = $this->connection->prepare("SELECT * FROM usuario");
    $query->execute();

    return $query->fetch(PDO::FETCH_OBJ);
  }
  public function iniciarSesion($email, $contrasena)
  {
    $sql = "SELECT * FROM usuario WHERE email = :email";
    $stmt = $this->connection->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario) {
      if (password_verify($contrasena, $usuario['contrasena'])) {
        return $usuario;
      } else {
        return false;
      }
    } else {
      return false;
    }
  }
}
