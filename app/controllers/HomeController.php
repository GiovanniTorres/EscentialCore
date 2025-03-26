<?php
namespace App\Controllers;

class HomeController {
    public function index() {
        // Cargar la vista principal
        require_once "../app/views/home.php";
    }
}