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

    public function registrar()
    {
        $this->view('registrar');
    }

    public function registrar_post()
    {
        // try {
        //     $registroDto = RegistroDTO::fromRequest($_POST);
        //     $this->authService->createUser($registroDto);
        //     $usuario = new Usuario();
        //     var_dump($usuario->getall());
        // } catch (Exception $e) {
        //     die($e->getMessage());
        // }

        $this->view('registro_concluido');
    }
}