<?php

require_once "Controller.php";
require_once __ROOT_PATH__ . "/app/models/MateriaPrimaModel.php";

class MateriaPrimaController extends Controller {
  public function index() {
    $materiaPrimaModel = new MateriaPrimaModel([], "materia_prima");
    $materiasPrimas = $materiaPrimaModel->select();
    require_once __ROOT_PATH__ . "/app/views/materia_prima/index.php";
  }

  public function add() {
    require_once __ROOT_PATH__ . "/app/views/materia_prima/add.php";
  }

  public function modify() {
    $id = $_GET["id"];
    $materiaPrimaModel = new MateriaPrimaModel([], "materia_prima");
    $materiaPrima = $materiaPrimaModel->find($id);
    
    require_once __ROOT_PATH__ . "/app/views/materia_prima/modify.php";
  }
  
  public function get() {
    $materiaPrimaModel = new MateriaPrimaModel([], "materia_prima");
    return $materiaPrimaModel->select();
  }
  
  public function post() {
    $materiaPrimaModel = new MateriaPrimaModel(array_values($_POST), "materia_prima");
    $materiaPrimaModel->insert();
    header("Location: " . __URL__ . "/materias_primas");
  }
  
  public function update() {
    $materiaPrimaModel = new MateriaPrimaModel(array_values($_POST), "materia_prima");
    $materiaPrimaModel->update();
    header("Location: " . __URL__ . "/materias_primas");
  }
  
  public function delete() {
    $materiaPrimaModel = new MateriaPrimaModel([$_GET["id"]], "materia_prima");
    $materiaPrimaModel->delete();
    header("Location: " . __URL__ . "/materias_primas");
  }
}

?>
