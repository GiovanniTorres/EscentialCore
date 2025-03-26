<?php
namespace Core;

class Router {
    public function handleRequest() {
        // Obtener la URL de la petición
        $url = $_GET['url'] ?? 'Home';  // Si no hay URL, asignamos 'home' como predeterminado

        // Convertir la URL en el nombre del controlador
        //$controllerName = ucfirst($url) . 'Controller';  // Convierte 'home' en 'HomeController'
  print $controllerName = ucfirst($url) . 'Controller';  // Convierte 'home' en 'HomeController'
        
        // Buscar el archivo del controlador
        $controllerFile = "../app/controllers/$controllerName.php";

        if (file_exists($controllerFile)) {
            // Incluir el controlador si existe
            require_once $controllerFile;
            
            // Crear una instancia del controlador y llamar al método 'index'
            $controller = new $controllerName();
            $controller->index();
        } else {
            // Si no existe el controlador, mostrar error 404
            http_response_code(404);
            echo "Página no encontrada";
        }
    }
}