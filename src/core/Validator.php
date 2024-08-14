<?php

namespace App\Core;

abstract class Validator {
    protected $errors = [];

    abstract public function validate($data): array;

    public function getErrors(): array {
        return $this->errors;
    }

    protected function addError(string $error) {
        $this->errors[] = $error;
    }
}
