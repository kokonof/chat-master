<?php
namespace App\Core;

class Template {
    private $layout = 'main';
    private $defaultTemplate;

    public function setLayout($layout) {
        $this->layout = $layout;
    }

    public function render($data = [], $template = null) {
        if (!$template) {
            $backtrace = debug_backtrace();
            $class = $backtrace[1]['class'];
            $method = $backtrace[1]['function'];

            $classPath = str_replace(['App\\Controllers\\', 'Controller'], '', $class);
            $classPath = strtolower(str_replace('\\', '/', $classPath));

            $template = $classPath . '/' . $method;
        }

        extract($data);
        $content = BASE_PATH . 'views/' . $template . '.php';

        require_once BASE_PATH . 'views/layout/' . $this->layout . '.php';
    }
}
