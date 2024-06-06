<?php

require_once "Controller.php";
require_once __ROOT_PATH__ . "/app/models/UserModel.php";

class LoginController extends Controller
{
  public function __construct()
  {
    parent::__construct();
  }



  public function index()
  {
    $userModel = new UserModel();
    require_once __ROOT_PATH__ . "/app/views/Login.php";

    session_start();

    if (isset($_POST['iniciarSesion'])) {
      $email = $_POST['email'];
      $contrasena = $_POST['contrasena'];

      $usuarioLogin = $userModel->iniciarSesion($email, $contrasena);
      echo "$usuarioLogin";

      if ($usuarioLogin) {
        $_SESSION['usuario'] = $usuarioLogin;
        // Redirigir a la página principal según el rol del usuario
        if ($usuarioLogin['rol'] == "administrador") {
          header("Location: principal");
          echo "funciona ";
        } else if ($usuarioLogin['rol'] == "usuario") {
          header("Location: pagina_usuario.php");
        } else {
          echo "Rol no válido";
        }
      } else {
        echo "Credenciales incorrectas";
      }
    }

    if (isset($_SESSION['usuario'])) {
      $usuarioActual = $userModel->obtenerUsuarioPorId($_SESSION['usuario']['id_usuario']);

      if ($usuarioActual) {
        echo "Bienvenido " . $usuarioActual['nombre'] . " " . $usuarioActual['apellido'] . " (" . $usuarioActual['rol'] . ")";
      } else {
        unset($_SESSION['usuario']);
        header("Location: login.php");
      }
    } else {
      echo "<a href='login.php'>Iniciar Sesión</a>";
    }
  }
}
