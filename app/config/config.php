<?php

use \Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__ROOT_PATH__);
$dotenv->load();

define("__URL__", "/sig-app/public_html");

?>
