<?php


namespace App\Controllers;

use App\DTOs\EnderecoDTO;
use App\DTOs\RegistroDTO;
use App\Models\Usuario;
use App\Models\Endereco;
use Exception;

class AuthController extends Controller
{
    private readonly Endereco $endereco;
    public function __construct()
    {
        $this->endereco = new Endereco();
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
        try {
            $registroDto = RegistroDTO::fromRequest($_POST);
            $enderecoDto = new EnderecoDTO('Teste', 'DTO', 'PHP', 'aaaa', 'aaa', 'bb', 'cccc');
            $data = $this->endereco->insert($enderecoDto);
            var_dump($data);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}