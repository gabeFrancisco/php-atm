<?php

namespace App\Services;

use App\DTOs\RegistroDTO;
use App\Models\Endereco;
use App\Models\Usuario;
use App\Utils\DB;
use Exception;
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
        $db = DB::connect();
        try {
            $db->beginTransaction();

            $dbEndereco = $this->endereco->insert($dto->endereco);
            $senha = $dto->usuario->senha;

            //criptografa a senha usando o algoritmo BCrypt
            $senhaBcrypt = password_hash($senha, PASSWORD_BCRYPT);
            $dto->usuario->senha = $senhaBcrypt;

            if ($dbEndereco == null) {
                throw new InvalidArgumentException("Erro ao criar a entidade [Endereço]");
            }

            $dto->usuario->endereco_id = $dbEndereco['id'];

            $result = $this->usuario->insert($dto->usuario);

            $db->commit();

            return $result['nome'];
        } catch (Exception $e) {
            $db->rollBack();
            die('Erro: ' . $e->getMessage());
        }
    }
}