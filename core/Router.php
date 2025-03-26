<?php
namespace Core;

class Router {
    public function handleRequest() {
        $url = $_GET['url'] ?? 'home';

        // Convertir la URL en nombre de controlador
        $controllerName = ucfirst(strtolower($url)) . "controller";
        $controllerClass = "app\\controllers\\" . $controllerName;

        // Verificar si el controlador existe
        if (class_exists($controllerClass)) {
            $controller = new $controllerClass();
            $controller->index();
        } else {
            echo "Error 404: Página no encontrada.";
        }
    }
}
