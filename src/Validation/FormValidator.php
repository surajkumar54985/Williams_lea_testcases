<?php

namespace App\Validation;

class FormValidator
{
    public function isValidEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException("Invalid email address: $email");
        }

        return true;
    }

    public function isValidPassword($password)
    {
        if (strlen($password) < 8) {
            throw new \InvalidArgumentException("Password must be at least 8 characters long");
        }

        return true;
    }
}
?>
