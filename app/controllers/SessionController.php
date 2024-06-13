<?php

require_once "Controller.php";
require_once __ROOT_PATH__ . "/app/models/UserModel.php";

class SessionController extends Controller {
  public function index() {
    $userModel = new UserModel([], "usuario");
    require_once __ROOT_PATH__ . "/app/views/login.php";
  }

  public function auth() {
    $email = $_POST["email"];
    $password = $_POST["contrasena"];

    $userModel = new UserModel([], "usuario");
    $user = $userModel->raw("SELECT * FROM usuario WHERE email='$email'")[0];
    
    if(password_verify($password, $user->contrasena)) {
      return 1;
    }else {
      return 0;
    }
  }

  public function out() {
    session_start();
    $_SESSION = array();
    session_destroy();
  }

  public static function verify() {
    session_start();
    if(!isset($_SESSION["email"])) {
      header("Location: " . __URL__ . "/login");
    }
  }
}


?>
