<?php

// controllers includes
require_once "controllers/LoginController.php";

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

if($url == "aaa/other2") {
  echo "ddddxx";
}

?>
