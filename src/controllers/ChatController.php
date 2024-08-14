<?php
namespace App\Controllers;

use App\Core\Template;
use App\Models\Chat;
use App\Models\Validators\HeaderValidator;
use App\Models\Validators\MessageValidator;
use App\Models\Validators\UserNameValidator;

class ChatController {
    private $userNameValidator;
    private $messageValidator;
    private $headerValidator;

    public function __construct() {
        $this->userNameValidator = new UserNameValidator();
        $this->messageValidator = new MessageValidator();
        $this->headerValidator = new HeaderValidator();
    }
    public function index() {
        $chatModel = new Chat();
        $messages = $chatModel->getMessages();

        $template = new Template();
//        $template->setLayout('chat'); // Можливо, цей метод потрібен, щоб встановити спеціальний лейаут
        $template->render(compact('messages'));
    }

    public function addMessage() {
        $chatModel = new Chat();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'username' => $_POST['username'] ?? '',
                'header' => $_POST['header'] ?? '',
                'message' => $_POST['message'] ?? '',
            ];

            $errors = [
                'username' => $this->userNameValidator->validate($data),
                'header' => $this->headerValidator->validate($data),
                'message' => $this->messageValidator->validate($data),
            ];

            // Flatten errors for easier processing in the view
            $flattenedErrors = [];
            foreach ($errors as $field => $fieldErrors) {
                if (!empty($fieldErrors)) {
                    $flattenedErrors[$field] = $fieldErrors;
                }
            }

            if (empty($flattenedErrors)) {
                if ($chatModel->addMessage($data['username'], $data['message'], $data['header'])) {
                    // Clear session data on successful submission
                    unset($_SESSION['errors']);
                    unset($_SESSION['data']);
                    header('Location: /chat');
                    exit();
                }
            } else {
                // Store errors and form data in the session
                $_SESSION['errors'] = $flattenedErrors;
                $_SESSION['data'] = $data; // Preserve form data
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
