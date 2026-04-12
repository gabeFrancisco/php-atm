<?php


namespace App\Controllers;

use App\DTOs\RegistroDTO;
use App\Models\Usuario;
use App\Services\AuthService;
use Exception;

class AuthController extends Controller
{
    private readonly AuthService $authService;
    public function __construct()
    {
        $this->authService = new AuthService();
    }
    public function index()
    {
        $usuario = new Usuario();
        var_dump($usuario->getall());
    }
    public function login()
    {
        $this->view('login');
    }

    public function login_post()
    {
        var_dump($_POST);
    }

    public function registrar()
    {
        $this->view('registrar');
    }

    public function registrar_post()
    {
        $registroDto = RegistroDTO::fromRequest($_POST);
        $nome = $this->authService->createUser($registroDto);

        $this->view('registro_concluido', ["nome" => $nome]);
    }
}