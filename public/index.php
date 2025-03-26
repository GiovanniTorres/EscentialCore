<?php
// Incluir el enrutador y la configuración
require_once __DIR__ . '/../core/Router.php';  // Incluye el enrutador
require_once __DIR__ . '/../core/Config.php';   // Si tienes configuraciones generales

use Core\Router;

// Crear una instancia del enrutador
$router = new Router();

// Manejar la solicitud
$router->handleRequest();