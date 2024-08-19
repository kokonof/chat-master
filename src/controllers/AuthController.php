<?php
namespace App\Controllers;

use App\Core\Template;
use App\Models\Chat;
class AuthController {
    public function login() {
//        $userModel = new Chat();
//        $users = $userModel->getMessages();

        $template = new Template();
        $template->setLayout('auth');
        $template->render(compact([]),'auth/login'); // Автоматичний вибір шаблону
    }

    public function register() {
        $userModel = new Chat();
        $users = $userModel->getMessages();

        $template = new Template();
        $template->setLayout('auth');
        $template->render(compact('users'),'auth/register'); // Автоматичний вибір шаблону
    }

    public function logout() {
        session_start();
        session_destroy();

        header("Location: /");
        exit();
    }
}

