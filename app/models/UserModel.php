<?php

require_once "Model.php";

class UserModel extends Model
{
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

  public function obtenerUsuarioPorId($idUsuario)
  {
    $sql = "SELECT * FROM usuarios WHERE id_usuario = :idUsuario";
    $stmt = $this->connection->prepare($sql);
    $stmt->bindParam(':idUsuario', $idUsuario);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
  }
}
