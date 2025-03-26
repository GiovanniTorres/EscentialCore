<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "../core/Router.php";

use Core\Router;

$router = new Router();
$router->handleRequest();