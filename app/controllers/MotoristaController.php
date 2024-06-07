<?php

require_once "Controller.php";
require_once __ROOT_PATH__ . "/app/models/MotoristaModel.php";

class MotoristaController extends Controller {
  public function index() {
    $motoristaModel = new MotoristaModel([], "motorista");
    $motoristas = $motoristaModel->select();
    require_once __ROOT_PATH__ . "/app/views/motorista/index.php";
  }

  public function add() {
    require_once __ROOT_PATH__ . "/app/views/motorista/add.php";
  }

  public function modify() {
    $dui = $_GET["dui"];
    $motoristaModel = new MotoristaModel([], "motorista");
    $motorista = $motoristaModel->find($dui);
    
    require_once __ROOT_PATH__ . "/app/views/motorista/modify.php";
  }
  
  public function get() {
    $motoristaModel = new MotoristaModel([], "motorista");
    return $motoristaModel->select();
  }
  
  public function post() {
    $motoristaModel = new MotoristaModel(array_values($_POST), "motorista");
    $motoristaModel->insert();
    header("Location: " . __URL__ . "/motoristas");
  }
  
  public function update() {
    $motoristaModel = new MotoristaModel(array_values($_POST), "motorista");
    $motoristaModel->update();
    header("Location: " . __URL__ . "/motoristas");
  }
  
  public function delete() {
    $motoristaModel = new MotoristaModel([$_GET["dui"]], "motorista");
    $motoristaModel->delete();
    header("Location: " . __URL__ . "/motoristas");
  }
}

?>
