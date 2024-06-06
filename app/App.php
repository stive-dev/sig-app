<?php

// controllers includes
require_once "controllers/LoginController.php";
require_once "models/MotoristaModel.php";
require_once "controllers/MotoristaController.php";

// config
$url = "";

if(isset($_GET["url"])) {
  $url = $_GET["url"];
}

// routes
if($url == "login") {
  $loginController = new LoginController();
  $loginController->index();
}

// motorista routes
if($url == "motoristas") {
  $motoristaController = new MotoristaController();
  $motoristaController->index();
}else if($url == "motoristas/get") {
  $motoristaController = new MotoristaController();
  echo json_encode($motoristaController->get());
}else if($url == "motoristas/insert") {
  $motoristaController = new MotoristaController();
  $motoristaController->post();
}else if($url == "motoristas/delete") {
  $motoristaController = new MotoristaController();
  $motoristaController->delete();
}else if($url == "motoristas/update") {
  $motoristaController = new MotoristaController();
  $motoristaController->update();
}

?>
