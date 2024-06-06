<?php

require_once "Controller.php";
require_once __ROOT_PATH__ . "/app/models/UserModel.php";

class LoginController extends Controller
{
  public function __construct()
  {
    parent::__construct();
  }



  public function index() {
    $userModel = new UserModel();

    require_once __ROOT_PATH__ . "/app/views/login.php";
    $userModel = new UserModel();

    if (isset($_POST['iniciarSesion'])) {
      $email = $_POST['email'];
      $contrasena = $_POST['contrasena'];

      $usuarioLogin = $userModel->iniciarSesion($email, $contrasena);

      if ($usuarioLogin) {
        // Iniciar sesión del usuario y redirigir a la página principal
        echo "Bienvenido " . $usuarioLogin['nombre'] . " " . $usuarioLogin['apellido'];
        header("Location: /app/views/index.php");
        die();
      } else {
        echo "Credenciales incorrectas";
      }
    }


  }
}
