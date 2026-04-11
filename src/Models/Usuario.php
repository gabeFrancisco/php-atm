<?php

namespace App\Models;
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
}