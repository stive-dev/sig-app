<?php

// controllers includes
require_once "controllers/LoginController.php";
require_once "controllers/MotoristaController.php";
require_once "controllers/VehiculoController.php";
require_once "controllers/MotivoController.php";
require_once "controllers/dashboardController.php";

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
}else if($url == "motoristas/add") {
  $motoristaController = new MotoristaController();
  $motoristaController->add();
}else if($url == "motoristas/modify") {
  $motoristaController = new MotoristaController();
  $motoristaController->modify();
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


// vehiculos routes 
if($url == "vehiculos") {
  $vehiculoController = new VehiculoController();
  $vehiculoController->index();
}else if($url == "vehiculos/add") {
  $vehiculoController = new VehiculoController();
  $vehiculoController->add();
}else if($url == "vehiculos/modify") {
  $vehiculoController = new VehiculoController();
  $vehiculoController->modify();
}else if($url == "vehiculos/get") {
  $vehiculoController = new VehiculoController();
  echo json_encode($vehiculoController->get());
}else if($url == "vehiculos/insert") {
  $vehiculoController = new VehiculoController();
  $vehiculoController->post();
}else if($url == "vehiculos/delete") {
  $vehiculoController = new VehiculoController();
  $vehiculoController->delete();
}else if($url == "vehiculos/update") {
  $vehiculoController = new VehiculoController();
  $vehiculoController->update();
}

// motivos routes 
if($url == "motivos") {
  $motivoController = new MotivoController();
  $motivoController->index();
}else if($url == "motivos/add") {
  $motivoController = new MotivoController();
  $motivoController->add();
}else if($url == "motivos/modify") {
  $motivoController = new MotivoController();
  $motivoController->modify();
}else if($url == "motivos/get") {
  $motivoController = new MotivoController();
  echo json_encode($motivoController->get());
}else if($url == "motivos/insert") {
  $motivoController = new MotivoController();
  $motivoController->post();
}else if($url == "motivos/delete") {
  $motivoController = new MotivoController();
  $motivoController->delete();
}else if($url == "motivos/update") {
  $motivoController = new MotivoController();
  $motivoController->update();
}






if($url == "principal") {
  echo $_POST["email"];
  $dashboardController = new dashboardController();
  $dashboardController->index();
}

?>
