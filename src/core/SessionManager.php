<?php

namespace App\Core;

class SessionManager
{
    public function __construct()
    {
        session_start(); // Ensure session is started
    }

    public function setErrors(array $errors)
    {
        $_SESSION['errors'] = $errors;
    }

    public function getErrors()
    {
        $errors = $_SESSION['errors'] ?? [];
        unset($_SESSION['errors']);
        return $errors;
    }

    public function setFormData(array $data)
    {
        $_SESSION['data'] = $data;
    }

    public function getFormData()
    {
        $data = $_SESSION['data'] ?? [];
        return $data;
    }
}
