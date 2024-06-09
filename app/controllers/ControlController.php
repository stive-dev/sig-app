<?php

require_once "Controller.php";
require_once __ROOT_PATH__ . "/app/models/ControlModel.php";
require_once __ROOT_PATH__ . "/app/models/MateriaPrimaModel.php";
require_once __ROOT_PATH__ . "/app/models/VehiculoModel.php";
require_once __ROOT_PATH__ . "/app/models/MotoristaModel.php";
require_once __ROOT_PATH__ . "/app/models/MotivoModel.php";

class ControlController extends Controller {
  public function index() {
    $controlModel = new ControlModel([], "control");
    if($_GET["filtro"] == "fuera") {
      $controles = $controlModel->raw("SELECT
	control.id AS id, 
    CONCAT_WS(' - ', materia_prima.id, materia_prima.tipo) as 'id_materia_prima',
    control.placa_vehiculo as placa_vehiculo,
    CONCAT_WS(' - ', motorista.dui, motorista.apellidos) as 'dui_motorista',
    control.numero_pesa as numero_pesa,
    control.numero_orden as numero_orden,
    control.peso_salida as peso_salida,
    control.motivo_salida,
    control.fecha_salida as fecha_salida,
    control.peso_entrada as peso_entrada,
    control.motivo_entrada,
    control.fecha_entrada as fecha_entrada
FROM control 
INNER JOIN materia_prima ON control.id_materia_prima=materia_prima.id
INNER JOIN motorista ON control.dui_motorista=motorista.dui WHERE control.motivo_entrada='Sin Asignar';");
    }else if($_GET["filtro"] == "dentro") {
      $controles = $controlModel->raw("SELECT
	control.id AS id, 
    CONCAT_WS(' - ', materia_prima.id, materia_prima.tipo) as 'id_materia_prima',
    control.placa_vehiculo as placa_vehiculo,
    CONCAT_WS(' - ', motorista.dui, motorista.apellidos) as 'dui_motorista',
    control.numero_pesa as numero_pesa,
    control.numero_orden as numero_orden,
    control.peso_salida as peso_salida,
    control.motivo_salida,
    control.fecha_salida as fecha_salida,
    control.peso_entrada as peso_entrada,
    control.motivo_entrada,
    control.fecha_entrada as fecha_entrada
FROM control 
INNER JOIN materia_prima ON control.id_materia_prima=materia_prima.id
INNER JOIN motorista ON control.dui_motorista=motorista.dui WHERE control.motivo_entrada!='Sin Asignar';");
    }else {
      $controles = $controlModel->raw("SELECT
	control.id AS id, 
    CONCAT_WS(' - ', materia_prima.id, materia_prima.tipo) as 'id_materia_prima',
    control.placa_vehiculo as placa_vehiculo,
    CONCAT_WS(' - ', motorista.dui, motorista.apellidos) as 'dui_motorista',
    control.numero_pesa as numero_pesa,
    control.numero_orden as numero_orden,
    control.peso_salida as peso_salida,
    control.motivo_salida,
    control.fecha_salida as fecha_salida,
    control.peso_entrada as peso_entrada,
    control.motivo_entrada,
    control.fecha_entrada as fecha_entrada
FROM control 
INNER JOIN materia_prima ON control.id_materia_prima=materia_prima.id
INNER JOIN motorista ON control.dui_motorista=motorista.dui;");
    }
    
    
    require_once __ROOT_PATH__ . "/app/views/control/index.php";
  }

  public function add() {
    $materiaPrimaModel = new MateriaPrimaModel([], "materia_prima");
    $materiasPrimas = $materiaPrimaModel->select();

    $vehiculoModel = new VehiculoModel([], "vehiculo");
    $vehiculos = $vehiculoModel->select();

    $motoristaModel = new MotoristaModel([], "motorista");
    $motoristas = $motoristaModel->select();

    $motivoModel = new MotivoModel([], "motivo");
    $motivos = $motivoModel->select();
    
    require_once __ROOT_PATH__ . "/app/views/control/add.php";
  }

  public function modify() {
    $id = $_GET["id"];
    $controlModel = new ControlModel([], "control");
    $control = $controlModel->find($id);

    $materiaPrimaModel = new MateriaPrimaModel([], "materia_prima");
    $materiasPrimas = $materiaPrimaModel->select();

    $vehiculoModel = new VehiculoModel([], "vehiculo");
    $vehiculos = $vehiculoModel->select();

    $motoristaModel = new MotoristaModel([], "motorista");
    $motoristas = $motoristaModel->select();

    $motivoModel = new MotivoModel([], "motivo");
    $motivos = $motivoModel->select();

    $materiaPrima_ = $materiaPrimaModel->find($control->id_materia_prima);
    $vehiculo_ = $vehiculoModel->find($control->placa_vehiculo);
    $motorista_ = $motoristaModel->find($control->dui_motorista);
    
    require_once __ROOT_PATH__ . "/app/views/control/modify.php";
  }
  
  public function get() {
    $controlModel = new ControlModel([], "control");
    return $controlModel->select();
  }
  
  public function post() {
    $controlModel = new ControlModel(array_values($_POST), "control");
    $controlModel->insert();
    
    header("Location: " . __URL__ . "/controles");
  }
  
  public function update() {
    $controlModel = new ControlModel(array_values($_POST), "control");
    $controlModel->update();
    header("Location: " . __URL__ . "/controles");
  }
  
  public function delete() {
    $controlModel = new ControlModel([$_GET["id"]], "control");
    $controlModel->delete();
    header("Location: " . __URL__ . "/controles");
  }

  public function customGet() {
    $controlModel = new ControlModel([], "control");
    return $controlModel->raw("SELECT
	control.id AS id, 
    CONCAT_WS(' - ', materia_prima.id, materia_prima.tipo) as 'id_materia_prima',
    control.placa_vehiculo as placa_vehiculo,
    CONCAT_WS(' - ', motorista.dui, motorista.apellidos) as 'dui_motorista',
    control.numero_pesa as numero_pesa,
    control.numero_orden as numero_orden,
    control.peso_salida as peso_salida,
    control.motivo_salida,
    control.fecha_salida as fecha_salida,
    control.peso_entrada as peso_entrada,
    control.motivo_entrada,
    control.fecha_entrada as fecha_entrada
FROM control 
INNER JOIN materia_prima ON control.id_materia_prima=materia_prima.id
INNER JOIN motorista ON control.dui_motorista=motorista.dui;");
  }
}

?>
