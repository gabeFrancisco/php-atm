<?php

namespace App\Services;

use App\DTOs\RegistroDTO;
use App\Models\Endereco;
use App\Models\Usuario;
use App\Utils\DB;
use InvalidArgumentException;

class AuthService
{
    private readonly Usuario $usuario;
    private readonly Endereco $endereco;
    public function __construct()
    {
        $this->usuario = new Usuario();
        $this->endereco = new Endereco();
    }
    public function createUser(RegistroDTO $dto)
    {
        $dbEndereco = $this->endereco->insert($dto->endereco);
        $senha = $dto->usuario->senha;
        $senhaBcrypt = password_hash($senha, PASSWORD_BCRYPT);
        $dto->usuario->senha = $senhaBcrypt;

        if ($dbEndereco == null) {
            throw new InvalidArgumentException("Erro ao criar a entidade [Endereço]");
        }

        $dto->usuario->endereco_id = $dbEndereco['id'];

        $this->usuario->insert($dto->usuario);
    }
}