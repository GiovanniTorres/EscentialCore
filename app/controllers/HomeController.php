<?php

namespace App\Controllers;

class HomeController
{
    public function index()
    {
        // Llamamos a la función que carga la vista
        $this->view('home');
    }

    private function view($view)
    {
        require_once '../app/views/header.php';
        require_once "../app/views/{$view}.php";
        require_once '../app/views/footer.php';
    }
}