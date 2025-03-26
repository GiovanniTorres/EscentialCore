<?php
namespace Core;

class Router {
    public function handleRequest() {
            $url = $_GET['url'] ?? 'home';
                    echo "Router: Has accedido a " . htmlspecialchars($url);
                        }
                        }