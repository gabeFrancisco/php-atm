<?php

namespace App\Models;
use App\DTOs\UsuarioDTO;
use App\Utils\DB;
use PDO;

class Usuario
{
    private readonly PDO $db;
    public function __construct()
    {
        $this->db = DB::connect();
    }

    public function getall()
    {
        $stmt = $this->db->prepare('SELECT * FROM usuarios');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function find(int $id)
    {
        $stmt = $this->db->prepare('SELECT * FROM usuarios WHERE id = ?');
        $stmt->execute([$id]);

        //se não achar, ele retorna null
        return $stmt->fetch() ?: null;
    }

    public function insert(UsuarioDTO $dto)
    {
        $stmt = $this->db->prepare(
            'INSERT INTO usuarios (nome, sobrenome, email, cpf, senha, id_endereco)
                VALUES (?,?,?,?,?,?) RETURNING nome;
            '
        );

        $stmt->execute([
            $dto->nome,
            $dto->sobrenome,
            $dto->email,
            $dto->cpf,
            $dto->senha,
            $dto->endereco_id
        ]);

        return $stmt->fetch();
    }
}