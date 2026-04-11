<?php


namespace App\Controllers;

use App\DTOs\RegistroDTO;

class AuthController extends Controller
{
    public function login()
    {
        $this->view('login');
    }

    public function registrar()
    {
        $this->view('registrar');
    }

    public function registrar_post()
    {
        $registroDto = RegistroDTO::fromRequest($_POST);
        var_dump($registroDto);
    }
}