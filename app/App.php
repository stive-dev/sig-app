<?php

// controllers includes
require_once "controllers/LoginController.php";
require_once "controllers/dashboardController.php";

// config
$url = "";

if(isset($_GET["url"])) {
  $url = $_GET["url"];
}

// routes
if($url == "login") {
  $loginController = new LoginController();
  $loginController->index();
}

if($url == "principal") {
  echo $_POST["email"];
  $dashboardController = new dashboardController();
  $dashboardController->index();

}

?>
