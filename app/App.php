<?php

// controllers includes
require_once "controllers/LoginController.php";
require_once "controllers/MotoristaController.php";
require_once "controllers/VehiculoController.php";
require_once "controllers/MotivoController.php";
require_once "controllers/MateriaPrimaController.php";
require_once "controllers/ControlController.php";
require_once "controllers/MateriaPrimaAnalisisController.php";
require_once "controllers/DashboardController.php";
require_once "controllers/SessionController.php";

// config
$url = "";

if(isset($_GET["url"])) {
  $url = $_GET["url"];
}

// routes
if($url == "login") {
  $sessionController = new SessionController();
  $sessionController->index();
}else if($url == "login/auth") {
  $sessionController = new SessionController();
  if($sessionController->auth()) {
    session_start();
    $_SESSION["email"] = $_POST["email"];
    //header("Location: " . __URL__ . "/dashboard");
  }else {
    echo "error";
  }
}else if($url == "login/out") {
  $sessionController = new SessionController();
  $sessionController->out();
  header("Location: " . __URL__ . "/login");
}

// motorista routes
if($url == "motoristas") {
  SessionController::verify();
  $motoristaController = new MotoristaController();
  $motoristaController->index();
}else if($url == "motoristas/add") {
  SessionController::verify();
  $motoristaController = new MotoristaController();
  $motoristaController->add();
}else if($url == "motoristas/modify") {
  SessionController::verify();
  $motoristaController = new MotoristaController();
  $motoristaController->modify();
}else if($url == "motoristas/get") {
  SessionController::verify();
  $motoristaController = new MotoristaController();
  echo json_encode($motoristaController->get());
}else if($url == "motoristas/insert") {
  SessionController::verify();
  $motoristaController = new MotoristaController();
  $motoristaController->post();
}else if($url == "motoristas/delete") {
  SessionController::verify();
  $motoristaController = new MotoristaController();
  $motoristaController->delete();
}else if($url == "motoristas/update") {
  SessionController::verify();
  $motoristaController = new MotoristaController();
  $motoristaController->update();  
}

// vehiculos routes 
if($url == "vehiculos") {
  SessionController::verify();
  $vehiculoController = new VehiculoController();
  $vehiculoController->index();
}else if($url == "vehiculos/add") {
  SessionController::verify();
  $vehiculoController = new VehiculoController();
  $vehiculoController->add();
}else if($url == "vehiculos/modify") {
  SessionController::verify();
  $vehiculoController = new VehiculoController();
  $vehiculoController->modify();
}else if($url == "vehiculos/get") {
  SessionController::verify();
  $vehiculoController = new VehiculoController();
  echo json_encode($vehiculoController->get());
}else if($url == "vehiculos/insert") {
  SessionController::verify();
  $vehiculoController = new VehiculoController();
  $vehiculoController->post();
}else if($url == "vehiculos/delete") {
  SessionController::verify();
  $vehiculoController = new VehiculoController();
  $vehiculoController->delete();
}else if($url == "vehiculos/update") {
  SessionController::verify();
  $vehiculoController = new VehiculoController();
  $vehiculoController->update();
}

// motivos routes 
if($url == "motivos") {
  SessionController::verify();
  $motivoController = new MotivoController();
  $motivoController->index();
}else if($url == "motivos/add") {
  SessionController::verify();
  $motivoController = new MotivoController();
  $motivoController->add();
}else if($url == "motivos/modify") {
  SessionController::verify();
  $motivoController = new MotivoController();
  $motivoController->modify();
}else if($url == "motivos/get") {
  $motivoController = new MotivoController();
  SessionController::verify();
  echo json_encode($motivoController->get());
}else if($url == "motivos/insert") {
  SessionController::verify();
  $motivoController = new MotivoController();
  $motivoController->post();
}else if($url == "motivos/delete") {
  SessionController::verify();
  $motivoController = new MotivoController();
  $motivoController->delete();
}else if($url == "motivos/update") {
  SessionController::verify();
  $motivoController = new MotivoController();
  $motivoController->update();
}








// materias primas routes 
if($url == "materias_primas") {
  SessionController::verify();
  $materiaPrimaController = new MateriaPrimaController();
  $materiaPrimaController->index();
}else if($url == "materias_primas/add") {
  SessionController::verify();
  $materiaPrimaController = new MateriaPrimaController();
  $materiaPrimaController->add();
}else if($url == "materias_primas/modify") {
  SessionController::verify();
  $materiaPrimaController = new MateriaPrimaController();
  $materiaPrimaController->modify();
}else if($url == "materias_primas/get") {
  SessionController::verify();
  $materiaPrimaController = new MateriaPrimaController();
  echo json_encode($materiaPrimaController->get());
}else if($url == "materias_primas/insert") {
  SessionController::verify();
  $materiaPrimaController = new MateriaPrimaController();
  $materiaPrimaController->post();
}else if($url == "materias_primas/delete") {
  SessionController::verify();
  $materiaPrimaController = new MateriaPrimaController();
  $materiaPrimaController->delete();
}else if($url == "materias_primas/update") {
  SessionController::verify();
  $materiaPrimaController = new MateriaPrimaController();
  $materiaPrimaController->update();
}




// controles routes 
if($url == "controles") {
  SessionController::verify();
  $controlController = new ControlController();
  $controlController->index();
}else if($url == "controles/add") {
  SessionController::verify();
  $controlController = new ControlController();
  $controlController->add();
}else if($url == "controles/modify") {
  SessionController::verify();
  $controlController = new ControlController();
  $controlController->modify();
}else if($url == "controles/get") {
  SessionController::verify();
  $controlController = new ControlController();
  echo json_encode($controlController->get());
}else if($url == "controles/insert") {
  SessionController::verify();
  $controlController = new ControlController();
  $controlController->post();
}else if($url == "controles/delete") {
  SessionController::verify();
  $controlController = new ControlController();
  $controlController->delete();
}else if($url == "controles/update") {
  SessionController::verify();
  $controlController = new ControlController();
  $controlController->update();
}








// materias primas routes 
if($url == "materias_primas_analisis") {
  SessionController::verify();
  $materiaPrimaAnalisisController = new MateriaPrimaAnalisisController();
  $materiaPrimaAnalisisController->index();
}else if($url == "materias_primas_analisis/add") {
  SessionController::verify();
  $materiaPrimaAnalisisController = new MateriaPrimaAnalisisController();
  $materiaPrimaAnalisisController->add();
}else if($url == "materias_primas_analisis/modify") {
  SessionController::verify();
  $materiaPrimaAnalisisController = new MateriaPrimaAnalisisController();
  $materiaPrimaAnalisisController->modify();
}else if($url == "materias_primas_analisis/get") {
  SessionController::verify();
  $materiaPrimaAnalisisController = new MateriaPrimaAnalisisController();
  echo json_encode($materiaPrimaAnalisisController->get());
}else if($url == "materias_primas_analisis/insert") {
  try {
    SessionController::verify();
    $materiaPrimaAnalisisController = new MateriaPrimaAnalisisController();
    $materiaPrimaAnalisisController->post();
  }catch(Exception $err) {
    echo $err->getMessage();
  }
  
}else if($url == "materias_primas_analisis/delete") {
  SessionController::verify();
  $materiaPrimaAnalisisController = new MateriaPrimaAnalisisController();
  $materiaPrimaAnalisisController->delete();
}else if($url == "materias_primas_analisis/update") {
  try {
    SessionController::verify();
    $materiaPrimaAnalisisController = new MateriaPrimaAnalisisController();
    $materiaPrimaAnalisisController->update();
  }catch(Exception $err) {
    echo $err->getMessage();
  }
  
}


if($url == "dashboard") {
  SessionController::verify();
  $dashboardController = new DashboardController();
  $dashboardController->index();
}

?>
