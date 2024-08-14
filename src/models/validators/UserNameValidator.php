<?php
namespace App\Models\Validators;

use App\Core\Validator;

class UserNameValidator extends Validator {
    public function validate($data): array {
        $username = $data['username'] ?? '';

        if (empty($username)) {
            $this->addError('Username is empty');
        }

        if (strlen($username) <= 2) {
            $this->addError('Username is too short');
        }

        return $this->getErrors();
    }
}
