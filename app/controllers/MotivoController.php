<?php

require_once "Controller.php";
require_once __ROOT_PATH__ . "/app/models/MotivoModel.php";

class MotivoController extends Controller {
  public function index() {
    $motivoModel = new MotivoModel([], "motivo");
    $motivos = $motivoModel->select();
    require_once __ROOT_PATH__ . "/app/views/motivo/index.php";
  }

  public function add() {
    require_once __ROOT_PATH__ . "/app/views/motivo/add.php";
  }

  public function modify() {
    $id = $_GET["id"];
    $motivoModel = new MotivoModel([], "motivo");
    $motivo = $motivoModel->find($id);
    
    require_once __ROOT_PATH__ . "/app/views/motivo/modify.php";
  }
  
  public function get() {
    $motivoModel = new MotivoModel([], "motivo");
    return $motivoModel->select();
  }
  
  public function post() {
    echo $_POST["id"];
    $motivoModel = new MotivoModel(array_values($_POST), "motivo");
    $motivoModel->insert();
    header("Location: " . __URL__ . "/motivos");
  }
  
  public function update() {
    $motivoModel = new MotivoModel(array_values($_POST), "motivo");
    $motivoModel->update();
    header("Location: " . __URL__ . "/motivos");
  }
  
  public function delete() {
    $motivoModel = new MotivoModel([$_GET["id"]], "motivo");
    $motivoModel->delete();
    header("Location: " . __URL__ . "/motivos");
  }
}

?>
