<?php
const BASE_PATH = __DIR__ . '/src/';
define("SERVER_NAME", $_SERVER["SERVER_NAME"]);
define("REQUEST_SCHEME", $_SERVER["REQUEST_SCHEME"]);
const PUBLIC_BASE_URL = REQUEST_SCHEME . '://' . SERVER_NAME . '/public/';
const BASE_URL =REQUEST_SCHEME . '://' . SERVER_NAME . '/';

// Автозавантаження класів
spl_autoload_register(function($class) {
    $prefix = 'App\\';
    $base_dir = __DIR__ . '/src/';

    // Перевіряємо наявність простору імен
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    // Вирізаємо простір імен
    $relative_class = substr($class, $len);

    // Формуємо шлях до файлу
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    // Перевірка, чи не знаходиться файл у директорії views
    $excluded_dirs = ['views'];
    foreach ($excluded_dirs as $excluded_dir) {
        if (strpos($file, '/' . $excluded_dir . '/') !== false) {
            return; // Пропускаємо цю директорію
        }
    }

    // Завантажуємо файл, якщо він існує
    if (file_exists($file)) {
        require $file;
    }
});
