<?php

require_once "Controller.php";
require_once __ROOT_PATH__ . "/app/models/UserModel.php";

class dashboardController extends Controller
{
  public function __construct()
  {
    parent::__construct();
  }



  public function index() {
    $userModel = new UserModel();

    require_once __ROOT_PATH__ . "/app/views/principal.php";
    
  ;



  }
}
