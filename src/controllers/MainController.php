<?php
namespace App\Controllers;

use App\Core\Template;
use App\Models\Chat;

class MainController {
    public function index() {
        $userModel = new Chat();
        $users = $userModel->getMessages();

        $template = new Template();
//        $template->setL ayout('main');
        $template->render(compact('users'),'main/index');
    }

    public function getMessagesJson() {
        $userModel = new Chat();
        $messages = $userModel->getMessages();
//        var_dump($messages);

        header('Content-Type: application/json');
        echo json_encode($messages);
    }
}
