<?php

namespace App;

class PasswordValidator 
{
    public static function validate($password)
    {
        $errors = [];

        if (strlen($password) < 8) {
            $errors[] = "Le mot de passe doit comporter au moins 8 caractères";
        }

        if (preg_match_all('/\d/', $password) < 2) {
            $errors[] = "Le mot de passe doit contenir au moins 2 chiffres";
        }

        if (!preg_match('/[A-Z]/', $password)) {
            $errors[] = "Le mot de passe doit contenir au moins une lettre majuscule";
        }

        if (!preg_match('/[!@#$%^&*(),.?":{}|<>]/', $password)) {
            $errors[] = "Le mot de passe doit contenir au moins un caractère spécial";
        }

        return [
            'isValid' => empty($errors),
            'errors' => implode('. ', $errors)
        ];
    }
}
