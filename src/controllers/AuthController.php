<?php

class AuthController
{
    public function login()
    {
        require_once __DIR__ . '/../views/login.php';
    }

    public function registrar()
    {
        require_once __DIR__ . '/../views/registrar.php';
    }

    public function registrar_post()
    {

    }
}