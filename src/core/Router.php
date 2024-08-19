<?php

namespace App\Core;

class Router {
    public static function route($url) {

//        var_dump($url);
        $controller = !empty($url[0]) ? ucwords($url[0]) . 'Controller' : 'MainController';
        array_shift($url);

        $method = !empty($url[0]) ? $url[0] : 'index';
        array_shift($url);

        $params = $url;

        $controller = "App\\Controllers\\$controller";

        if (class_exists($controller)) {
            $controller = new $controller();

            if (method_exists($controller, $method)) {
                call_user_func_array([$controller, $method], $params);
            } else {
                self::render404("Метод $method не знайдено");
            }
        } else {
            self::render404("Контролер $controller не знайдено");
        }
    }

    private static function render404($text_error) {
        http_response_code(404);
        $template = new \App\Core\Template();
        $template->render(compact('text_error'), 'errors/404');
        exit();
    }
}
