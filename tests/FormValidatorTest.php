<?php

namespace App\Tests;

use App\Validation\FormValidator;
use PHPUnit\Framework\TestCase;

class FormValidatorTest extends TestCase
{
    public function testValidEmail()
    {
        $validator = new FormValidator();
        $this->assertTrue($validator->isValidEmail('test@example.com'));
    }

    public function testInvalidEmail()
    {
        $this->expectException(\InvalidArgumentException::class);

        $validator = new FormValidator();
        $validator->isValidEmail('invalid-email');
    }

    public function testValidPassword()
    {
        $validator = new FormValidator();
        $this->assertTrue($validator->isValidPassword('securePassword123'));
    }

    public function testInvalidPassword()
    {
        $this->expectException(\InvalidArgumentException::class);

        $validator = new FormValidator();
        $validator->isValidPassword('weak');
    }
}
?>
