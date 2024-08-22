<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

// Якщо це пре-запит (preflight request)
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    exit(0); // Припиняємо виконання для preflight запиту
}
require_once './init.php';

$url = isset($_GET['url']) ? explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL)) : [];

App\Core\Router::route($url);
