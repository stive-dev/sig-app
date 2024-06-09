<?php

require_once "Controller.php";
require_once __ROOT_PATH__ . "/app/models/VehiculoModel.php";
require_once __ROOT_PATH__ . "/app/models/MotoristaModel.php";
require_once __ROOT_PATH__ . "/app/models/MateriaPrimaModel.php";
require_once __ROOT_PATH__ . "/app/models/MateriaPrimaAnalisisModel.php";

class dashboardController extends Controller
{
  public function index() {
    $vehiculoModel = new VehiculoModel([], "vehiculo");
    $motoristaModel = new MotoristaModel([], "motorista");
    $materiaPrimaModel = new MateriaPrimaModel([], "materia_prima");
    $materiaPrimaAnalisisModel = new MateriaPrimaAnalisisModel([], "materia_prima_analisis");
    $vehiculosFuera = $materiaPrimaAnalisisModel->raw("SELECT * FROM control WHERE motivo_entrada='Sin Asignar';");
    $vehiculosDentro = $materiaPrimaAnalisisModel->raw("SELECT * FROM control WHERE motivo_entrada<>'Sin Asignar';");

    $vehiculos = $vehiculoModel->select();
    $motoristas = $motoristaModel->select();
    $materiasPrimas = $materiaPrimaModel->select();
    $materiasPrimasAnalisis = $materiaPrimaAnalisisModel->select();
    require_once __ROOT_PATH__ . "/app/views/dashboard/index.php";
  }
}
