<?php

namespace App\Controllers;

use App\Core\Template;
use App\Models\Chat;
use App\Models\ChatValidator;
use App\Core\SessionManager;

class ChatController
{
    private $chatValidator;
    private $sessionManager;

    public function __construct()
    {
        $this->chatValidator = new ChatValidator();
        $this->sessionManager = new SessionManager();
    }

    public function index()
    {
        $chatModel = new Chat();
        $messages = $chatModel->getMessages();

        $errors = $this->sessionManager->getErrors();
        $formData = $this->sessionManager->getFormData();

        $template = new Template();
        $template->render(compact('messages', 'errors', 'formData'));
    }

    public function addMessage()
    {
        $chatModel = new Chat();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'username' => $_POST['username'],
                'header' => $_POST['header'],
                'message' => $_POST['message'],
            ];

            $errors = $this->chatValidator->validate($data);

            if (empty($errors)) {
                if ($chatModel->addMessage($data['username'], $data['message'], $data['header'])) {
                    // Clear session data on successful submission
                    $this->sessionManager->setErrors([]);
                    $this->sessionManager->setFormData([]);
                    header('Location: /chat');
                    exit();
                }
            } else {
                $this->sessionManager->setErrors($errors);
                $this->sessionManager->setFormData($data);
                header('Location: /chat');
                exit();
            }
        }
    }

    public function removeMessage()
    {
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
