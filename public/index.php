<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Capturar la URL solicitada
$url = $_GET['url'] ?? 'chango';
echo "Has accedido a: " . htmlspecialchars($url);