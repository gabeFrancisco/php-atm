<?php


namespace App\Controllers;

use App\DTOs\RegistroDTO;

class AuthController
{
    public function login()
    {
        require_once __DIR__ . '/../Views/login.php';
    }

    public function registrar()
    {
        require_once __DIR__ . '/../Views/registrar.php';
    }

    public function registrar_post()
    {
        $registroDto = RegistroDTO::fromRequest($_POST);
        var_dump($registroDto);
    }
}