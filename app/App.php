<?php

// controllers includes
require_once "controllers/LoginController.php";
require_once "controllers/MotoristaController.php";
require_once "controllers/VehiculoController.php";
require_once "controllers/MotivoController.php";
require_once "controllers/MateriaPrimaController.php";
require_once "controllers/ControlController.php";
require_once "controllers/MateriaPrimaAnalisisController.php";
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








// materias primas routes 
if($url == "materias_primas") {
  $materiaPrimaController = new MateriaPrimaController();
  $materiaPrimaController->index();
}else if($url == "materias_primas/add") {
  $materiaPrimaController = new MateriaPrimaController();
  $materiaPrimaController->add();
}else if($url == "materias_primas/modify") {
  $materiaPrimaController = new MateriaPrimaController();
  $materiaPrimaController->modify();
}else if($url == "materias_primas/get") {
  $materiaPrimaController = new MateriaPrimaController();
  echo json_encode($materiaPrimaController->get());
}else if($url == "materias_primas/insert") {
  $materiaPrimaController = new MateriaPrimaController();
  $materiaPrimaController->post();
}else if($url == "materias_primas/delete") {
  $materiaPrimaController = new MateriaPrimaController();
  $materiaPrimaController->delete();
}else if($url == "materias_primas/update") {
  $materiaPrimaController = new MateriaPrimaController();
  $materiaPrimaController->update();
}




// controles routes 
if($url == "controles") {
  $controlController = new ControlController();
  $controlController->index();
}else if($url == "controles/add") {
  $controlController = new ControlController();
  $controlController->add();
}else if($url == "controles/modify") {
  $controlController = new ControlController();
  $controlController->modify();
}else if($url == "controles/get") {
  $controlController = new ControlController();
  echo json_encode($controlController->get());
}else if($url == "controles/insert") {
  $controlController = new ControlController();
  $controlController->post();
}else if($url == "controles/delete") {
  $controlController = new ControlController();
  $controlController->delete();
}else if($url == "controles/update") {
  $controlController = new ControlController();
  $controlController->update();
}








// materias primas routes 
if($url == "materias_primas_analisis") {
  $materiaPrimaAnalisisController = new MateriaPrimaAnalisisController();
  $materiaPrimaAnalisisController->index();
}else if($url == "materias_primas_analisis/add") {
  $materiaPrimaAnalisisController = new MateriaPrimaAnalisisController();
  $materiaPrimaAnalisisController->add();
}else if($url == "materias_primas_analisis/modify") {
  $materiaPrimaAnalisisController = new MateriaPrimaAnalisisController();
  $materiaPrimaAnalisisController->modify();
}else if($url == "materias_primas_analisis/get") {
  $materiaPrimaAnalisisController = new MateriaPrimaAnalisisController();
  echo json_encode($materiaPrimaAnalisisController->get());
}else if($url == "materias_primas_analisis/insert") {
  try {
    $materiaPrimaAnalisisController = new MateriaPrimaAnalisisController();
    $materiaPrimaAnalisisController->post();
  }catch(Exception $err) {
    echo $err->getMessage();
  }
  
}else if($url == "materias_primas_analisis/delete") {
  $materiaPrimaAnalisisController = new MateriaPrimaAnalisisController();
  $materiaPrimaAnalisisController->delete();
}else if($url == "materias_primas_analisis/update") {
  try {
    $materiaPrimaAnalisisController = new MateriaPrimaAnalisisController();
    $materiaPrimaAnalisisController->update();
  }catch(Exception $err) {
    echo $err->getMessage();
  }
  
}



if($url == "principal") {
  echo $_POST["email"];
  $dashboardController = new dashboardController();
  $dashboardController->index();
}

?>
