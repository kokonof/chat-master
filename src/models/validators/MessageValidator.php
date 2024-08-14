<?php
namespace App\Models\Validators;

use App\Core\Validator;

class MessageValidator extends Validator {
    public function validate($message): array {

        if (empty($message)) {
            $this->addError('Message is empty');
        }

        if (strlen($message) <= 2) {
            $this->addError('Message is too short');
        }

        return $this->getErrors();
    }
}
