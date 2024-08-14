<?php
namespace App\Models\Validators;

use App\Core\Validator;

class HeaderValidator extends Validator {
    public function validate($header): array {

        if (empty($header)) {
            $this->addError('Header is empty');
        }

        if (strlen($header) <= 2) {
            $this->addError('Header is too short');
        }

        return $this->getErrors();
    }
}
