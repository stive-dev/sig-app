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
require_once "models/MateriaPrimaModel.php";
use Dompdf\Dompdf;

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
    header("Location: " . __URL__ . "/dashboard");
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
try {
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
} catch(Exception $error) {
  header("Location: " . __URL__ . "/vehiculos?error=" . 1);
}

// motivos routes
try {
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

} catch(Exception $error) {
  header("Location: " . __URL__ . "/motivos?error=" . 1);
}








// materias primas routes
try {
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

} catch(Exception $error) {
  header("Location: " . __URL__ . "/materias_primas?error=" . 1);
}




// controles routes
try {
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
} catch(Exception $error) {
  header("Location: " . __URL__ . "/controles?error=" . 1);
}








// materias primas routes
try {
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
    SessionController::verify();
    $materiaPrimaAnalisisController = new MateriaPrimaAnalisisController();
    $materiaPrimaAnalisisController->post();
  }else if($url == "materias_primas_analisis/delete") {
    SessionController::verify();
    $materiaPrimaAnalisisController = new MateriaPrimaAnalisisController();
    $materiaPrimaAnalisisController->delete();
  }else if($url == "materias_primas_analisis/update") {
    SessionController::verify();
    $materiaPrimaAnalisisController = new MateriaPrimaAnalisisController();
    $materiaPrimaAnalisisController->update();
  }
} catch(Exception $error) {
  header("Location: " . __URL__ . "/materias_primas_analisis?error=" . 1);
}


if($url == "dashboard") {
  SessionController::verify();
  $dashboardController = new DashboardController();
  $dashboardController->index();
}

if($url == "reporte_peso") {
  $fecha = $_GET["fecha"];
  $materiaPrimaModel = new MateriaPrimaModel([] , "materia_prima");

  $resultado = $materiaPrimaModel->raw("SELECT 
control.fecha_entrada as fecha_entrada, 
materia_prima.tipo as tipo, 
materia_prima_analisis.numero_pesa as pesa
FROM control 
INNER JOIN materia_prima ON control.id_materia_prima=materia_prima.id
INNER JOIN materia_prima_analisis ON control.id_materia_prima=materia_prima_analisis.id_materia_prima
WHERE control.fecha_entrada='$fecha';");

  $resultado_existencia = $materiaPrimaModel->raw("SELECT 
control.fecha_entrada as fecha_entrada, 
materia_prima.tipo as tipo,
COUNT(materia_prima.tipo) as tipo_conteo
FROM control 
INNER JOIN materia_prima ON control.id_materia_prima=materia_prima.id
WHERE control.fecha_entrada='$fecha' ORDER BY COUNT(materia_prima.tipo) DESC LIMIT 1;");

  $resultado_menos_existencia = $materiaPrimaModel->raw("SELECT 
control.fecha_entrada as fecha_entrada, 
materia_prima.tipo as tipo,
COUNT(materia_prima.tipo) as tipo_conteo
FROM control 
INNER JOIN materia_prima ON control.id_materia_prima=materia_prima.id
WHERE control.fecha_entrada='$fecha' ORDER BY COUNT(materia_prima.tipo) ASC LIMIT 1;");

  //var_dump($resultado_existencia[0]);
  require_once __ROOT_PATH__ . "/app/views/reportes/reporte_peso.php";
  
  $dompdf = new Dompdf();
  $dompdf->loadHtml($file);
  $dompdf->render();
  $dompdf->stream();
}







if($url == "reporte_control") {
  $fecha = $_GET["fecha"];
  $materiaPrimaModel = new MateriaPrimaModel([] , "materia_prima");

  $resultado = $materiaPrimaModel->raw("SELECT 
control.fecha_salida as fecha_entrada, 
vehiculo.tipo as tipo,
CONCAT_WS(' ', motorista.nombres, motorista.apellidos) as nombre,
control.motivo_salida as motivo_salida
FROM control 
INNER JOIN vehiculo ON control.placa_vehiculo=vehiculo.placa
INNER JOIN motorista ON control.dui_motorista=motorista.dui
WHERE control.fecha_salida='$fecha';");

  $resultado_existencia = $materiaPrimaModel->raw("SELECT motivo_salida, count(motivo_salida) AS conteo FROM control  WHERE control.fecha_entrada='$fecha' GROUP BY motivo_salida;");

  $resultado_menos_existencia = $materiaPrimaModel->raw("SELECT 
control.fecha_entrada as fecha_entrada, 
materia_prima.tipo as tipo,
COUNT(materia_prima.tipo) as tipo_conteo
FROM control 
INNER JOIN materia_prima ON control.id_materia_prima=materia_prima.id
WHERE control.fecha_entrada='$fecha' ORDER BY COUNT(materia_prima.tipo) ASC LIMIT 1;");

  //var_dump($resultado_existencia[0]);
  require_once __ROOT_PATH__ . "/app/views/reportes/reporte_control.php";
  
  $dompdf = new Dompdf();
  $dompdf->loadHtml($file);
  $dompdf->render();
  $dompdf->stream();
}




if($url == "reporte_calidad") {
  $estado = $_GET["estado"];
  $materiaPrimaModel = new MateriaPrimaModel([] , "materia_prima");

  $resultado = $materiaPrimaModel->raw("SELECT materia_prima.tipo as materia, materia_prima_analisis.cantidad_muestra as cantidad, materia_prima_analisis.impureza as impureza, materia_prima_analisis.numero_pesa as pesa, materia_prima_analisis.estado AS estado FROM materia_prima_analisis INNER JOIN materia_prima ON materia_prima_analisis.id_materia_prima=materia_prima.id WHERE materia_prima_analisis.estado='$estado';");

  $resultado_existencia = $materiaPrimaModel->raw("SELECT ROUND(AVG(materia_prima_analisis.impureza),5) as prom_1, ROUND(VARIANCE(materia_prima_analisis.impureza),5) AS prom_2 FROM materia_prima_analisis WHERE estado='$estado';");

  $resultado_menos_existencia = $materiaPrimaModel->raw("SELECT 
control.fecha_entrada as fecha_entrada, 
materia_prima.tipo as tipo,
COUNT(materia_prima.tipo) as tipo_conteo
FROM control 
INNER JOIN materia_prima ON control.id_materia_prima=materia_prima.id
WHERE control.fecha_entrada='2024-06-10' ORDER BY COUNT(materia_prima.tipo) ASC LIMIT 1;");

  //var_dump($resultado_existencia[0]);
  require_once __ROOT_PATH__ . "/app/views/reportes/reporte_calidad.php";
  
  $dompdf = new Dompdf();
  $dompdf->loadHtml($file);
  $dompdf->render();
  $dompdf->stream();
}


?>
