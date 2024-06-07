<?php

require_once "Controller.php";
require_once __ROOT_PATH__ . "/app/models/VehiculoModel.php";

class VehiculoController extends Controller {
  public function index() {
    $vehiculoModel = new VehiculoModel([], "vehiculo");
    $vehiculos = $vehiculoModel->select();
    require_once __ROOT_PATH__ . "/app/views/vehiculo/index.php";
  }

  public function add() {
    require_once __ROOT_PATH__ . "/app/views/vehiculo/add.php";
  }

  public function modify() {
    $placa = $_GET["placa"];
    $vehiculoModel = new VehiculoModel([], "vehiculo");
    $vehiculo = $vehiculoModel->find($placa);
    
    require_once __ROOT_PATH__ . "/app/views/vehiculo/modify.php";
  }
  
  public function get() {
    $vehiculoModel = new VehiculoModel([], "vehiculo");
    return $vehiculoModel->select();
  }
  
  public function post() {
    $vehiculoModel = new VehiculoModel(array_values($_POST), "vehiculo");
    $vehiculoModel->insert();
    header("Location: " . __URL__ . "/vehiculos");
  }
  
  public function update() {
    $vehiculoModel = new VehiculoModel(array_values($_POST), "vehiculo");
    $vehiculoModel->update();
    header("Location: " . __URL__ . "/vehiculos");
  }
  
  public function delete() {
    $vehiculoModel = new VehiculoModel([$_GET["placa"]], "vehiculo");
    $vehiculoModel->delete();
    header("Location: " . __URL__ . "/vehiculos");
  }
}

?>
