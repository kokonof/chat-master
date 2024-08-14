<?php
namespace App\Controllers;

use App\Core\Template;
use App\Models\Chat;

class MainController {
    public function index() {
        $userModel = new Chat();
        $users = $userModel->getMessages();

        $template = new Template();
//        $template->setLayout('main');
        $template->render(compact('users'));
    }
}
