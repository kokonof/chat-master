<?php

namespace App\Models;

use App\Models\Validators\HeaderValidator;
use App\Models\Validators\MessageValidator;
use App\Models\Validators\UserNameValidator;

class ChatValidator
{
    private $userNameValidator;
    private $messageValidator;
    private $headerValidator;

    public function __construct()
    {
        $this->userNameValidator = new UserNameValidator();
        $this->messageValidator = new MessageValidator();
        $this->headerValidator = new HeaderValidator();
    }

    public function validate(array $data): array
    {
        $errors = [
            'username' => $this->userNameValidator->validate($data['username']),
            'header' => $this->headerValidator->validate($data['header']),
            'message' => $this->messageValidator->validate($data['message']),
        ];

        // Flatten errors for easier processing in the view
        $flattenedErrors = [];
        foreach ($errors as $field => $fieldErrors) {
            if (!empty($fieldErrors)) {
                $flattenedErrors[$field] = $fieldErrors;
            }
        }

        return $flattenedErrors;
    }
}
