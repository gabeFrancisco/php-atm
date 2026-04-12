<?php


namespace App\Controllers;

use App\DTOs\LoginDTO;
use App\DTOs\RegistroDTO;
use App\Models\Usuario;
use App\Services\AuthService;
use App\Utils\Session;
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
        $loginDto = LoginDTO::fromRequest($_POST);
        $data = $this->authService->loginUser($loginDto);

        $session = Session::getInstance();

        if ($data !== false) {
            $session->regenerate();
            $session->set('user_id', $data['id']);
            $session->set('cpf', $data['cpf']);
            $session->set('nome', $data['nome']);
        }

        echo "Usuário logado com sucesso!";
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