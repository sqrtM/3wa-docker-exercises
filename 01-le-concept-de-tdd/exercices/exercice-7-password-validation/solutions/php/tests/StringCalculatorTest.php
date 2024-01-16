<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes;

use App\PasswordValidator;

#[Attributes\CoversClass(StringCalculator::class)]
class PasswordValidatorTest extends TestCase {
    public function testPasswordMustContainAtLeast2Digits()
    {
        $result = PasswordValidator::validate("Abcdefg!");

        $this->assertFalse($result['isValid']);
        $this->assertStringContainsString("Le mot de passe doit contenir au moins 2 chiffres", $result['errors']);
    }

    public function testPasswordMustContainAtLeastOneUppercaseLetter()
    {
        $result = PasswordValidator::validate("abc123!@");

        $this->assertFalse($result['isValid']);
        $this->assertStringContainsString("Le mot de passe doit contenir au moins une lettre majuscule", $result['errors']);
    }

    public function testPasswordMustContainAtLeastOneSpecialCharacter()
    {
        $result = PasswordValidator::validate("Abc123456");

        $this->assertFalse($result['isValid']);
        $this->assertStringContainsString("Le mot de passe doit contenir au moins un caractère spécial", $result['errors']);
    }

    public function testPasswordMeetsAllRequirements()
    {
        $result = PasswordValidator::validate("Abc123!@");

        $this->assertTrue($result['isValid']);
        $this->assertEmpty($result['errors']);
    }

    public function testPasswordMustBeAtLeast8CharactersLongAndContain2Digits()
    {
        $result = PasswordValidator::validate("Abcde!@");

        $this->assertFalse($result['isValid']);
        $this->assertStringContainsString("Le mot de passe doit comporter au moins 8 caractères. Le mot de passe doit contenir au moins 2 chiffres", $result['errors']);
    }
}
