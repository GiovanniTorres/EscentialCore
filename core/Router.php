<?php
namespace Core;

class Router {
    public function handleRequest() {
            $url = $_GET['url'] ?? 'panocha';
                    echo "Router: Has accedido a " . htmlspecialchars($url);
                        }
                        }