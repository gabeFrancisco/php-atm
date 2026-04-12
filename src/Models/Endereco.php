<?php

namespace App\Models;

use App\DTOs\EnderecoDTO;
use App\Utils\DB;
use PDO;

class Endereco
{
    private readonly PDO $db;

    public function __construct()
    {
        $this->db = DB::connect();
    }

    public function insert(EnderecoDTO $dto)
    {
        $stmt = $this->db->prepare(
            'INSERT INTO enderecos (rua, numero, complemento, bairro, cidade, estado, cep)
             VALUES (?,?,?,?,?,?,?) RETURNING id'
        );

        $stmt->execute([
            $dto->rua,
            $dto->numero,
            $dto->complemento,
            $dto->bairro,
            $dto->cidade,
            $dto->estado,
            $dto->cep
        ]);

        return $stmt->fetch() ?: null;
    }
}