<?php

require_once "Controller.php";
require_once __ROOT_PATH__ . "/app/models/MateriaPrimaAnalisisModel.php";

class MateriaPrimaAnalisisController extends Controller {
  public function index() {
    $materiaPrimaAnalisisModel = new MateriaPrimaModel([], "materia_prima_analisis");
    $materiasPrimasAnalisis = $materiaPrimaAnalisisModel->select();
    require_once __ROOT_PATH__ . "/app/views/materia_prima_analisis/index.php";
  }

  public function add() {
    $materiaPrimaModel = new MateriaPrimaModel([], "materia_prima");
    $materiasPrimas = $materiaPrimaModel->select();
    
    require_once __ROOT_PATH__ . "/app/views/materia_prima_analisis/add.php";
  }

  public function modify() {
    $id = $_GET["id"];
    $materiaPrimaAnalisisModel = new MateriaPrimaAnalisisModel([], "materia_prima_analisis");
    $materiaPrimaAnalisis = $materiaPrimaAnalisisModel->find($id);

    $materiaPrimaModel = new MateriaPrimaModel([], "materia_prima");
    $materiasPrimas = $materiaPrimaModel->select();

    $materiaPrima_ = $materiaPrimaModel->find($materiaPrimaAnalisis->id_materia_prima);
    
    require_once __ROOT_PATH__ . "/app/views/materia_prima_analisis/modify.php";
  }
  
  public function get() {
    $materiaPrimaAnalisisModel = new MateriaPrimaAnalisisModel([], "materia_prima_analisis");
    return $materiaPrimaAnalisisModel->select();
  }
  
  public function post() {
    $materiaPrimaAnalisisModel = new MateriaPrimaAnalisisModel(array_values($_POST), "materia_prima_analisis");
    $materiaPrimaAnalisisModel->insert();
    header("Location: " . __URL__ . "/materias_primas_analisis");
  }
  
  public function update() {
    $materiaPrimaAnalisisModel = new MateriaPrimaAnalisisModel(array_values($_POST), "materia_prima_analisis");
    $materiaPrimaAnalisisModel->update();
    header("Location: " . __URL__ . "/materias_primas_analisis");
  }
  
  public function delete() {
    $materiaPrimaAnalisisModel = new MateriaPrimaAnalisisModel([$_GET["id"]], "materia_prima_analisis");
    $materiaPrimaAnalisisModel->delete();
    header("Location: " . __URL__ . "/materias_primas_analisis");
  }
}

?>
