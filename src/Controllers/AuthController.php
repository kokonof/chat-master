<?php
namespace App\Controllers;

use App\Core\Template;
use App\Models\Chat;
class AuthController {
    public function login() {
        $userModel = new Chat();
        $users = $userModel->getMessages();

        $template = new Template();
        $template->setLayout('auth');
        $template->render(compact('users')); // Автоматичний вибір шаблону
    }

    public function register() {
        $userModel = new Chat();
        $users = $userModel->getMessages();

        $template = new Template();
        $template->setLayout('auth');
        $template->render(compact('users')); // Автоматичний вибір шаблону
    }

    public function customMethod() {
        $userModel = new Chat();
        $users = $userModel->getMessages();

        $template = new Template();
        $template->render(compact('users'), 'auth/custom_template'); // Явне переоприділення шаблону
    }
}

