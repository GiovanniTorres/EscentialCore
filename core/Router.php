<?php
namespace Core;

class Router {
    public function run() {
            $route = $_GET['route'] ?? 'home';  // Ruta predeterminada
                    $controller = 'App\\Controllers\\' . ucfirst($route) . 'Controller';

                            if (class_exists($controller)) {
                                        $instance = new $controller();
                                                    $instance->index();
                                                            } else {
                                                                        echo "Página no encontrada we";
                                                                                }
                                                                                    }
                                                                                    }