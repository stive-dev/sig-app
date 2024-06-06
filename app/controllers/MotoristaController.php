<?php

require_once "Controller.php";
require_once __ROOT_PATH__ . "/app/models/MotoristaModel.php";

class MotoristaController extends Controller {
  public function index() {
    require_once __ROOT_PATH__ . "/app/views/motorista/index.php";
  }
  
  public function get() {
    $motoristaModel = new MotoristaModel([], "motorista");
    return $motoristaModel->select();
  }
  
  public function post() {
    $motoristaModel = new MotoristaModel(array_values($_POST), "motorista");
    $motoristaModel->insert();
  }
  
  public function update() {
    $motoristaModel = new MotoristaModel(array_values($_POST), "motorista");
    $motoristaModel->update();
  }
  
  public function delete() {
    $motoristaModel = new MotoristaModel(array_values($_POST), "motorista");
    $motoristaModel->delete();
  }
}

?>
