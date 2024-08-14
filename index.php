<?php
require_once './init.php';

$url = isset($_GET['url']) ? explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL)) : [];

App\Core\Router::route($url);
