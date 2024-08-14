<?php
namespace App\Controllers;

use App\Core\Template;
use App\Models\Chat;

class ChatController {
    public function index() {
        $chatModel = new Chat();
        $messages = $chatModel->getMessages();

        $template = new Template();
//        $template->setLayout('chat'); // Можливо, цей метод потрібен, щоб встановити спеціальний лейаут
        $template->render(compact('messages'));
    }

    public function addMessage() {
        $chatModel = new Chat();

        // Перевірка наявності POST-запиту
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'] ?? '';
            $header = $_POST['header'] ?? '';
            $message = $_POST['message'] ?? '';

            if ($chatModel->addMessage($username, $message, $header)) {
                header('Location: /chat');
                exit();
            }
        }
    }

    public function removeMessage() {
        $chatModel = new Chat();

        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'] ?? null;

            if ($chatModel->removeMessage($id)) {
                header('Location: /chat');
                exit();
            }
        }
        header('Location: /chat');
        exit();
    }
}
