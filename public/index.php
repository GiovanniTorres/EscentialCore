<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Autocargar clases automáticamente
spl_autoload_register(function ($class) {
    $file = __DIR__ . '/../' . str_replace('\\', '/', $class) . '.php';
    
    if (file_exists($file)) {
        require_once $file;
    } else {
        die("Error: No se pudo cargar la clase $class (Archivo esperado: $file)");
    }
});

use Core\Router;

// Verificar si la clase existe antes de instanciar
if (class_exists(Router::class)) {
    $router = new Router();
    $router->handleRequest();
} else {
    die("Error: La clase Router no se encontró.");
}