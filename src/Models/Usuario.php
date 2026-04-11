<?php

namespace App\Models;

use PDO;

class Usuario
{
    public function __construct(public readonly PDO $db)
    {
    }

    public function find(int $id)
    {
        $stmt = $this->db->prepare('SELECT * FROM usuarios WHERE id = ?');
        $stmt->execute([$id]);

        //se não achar, ele retorna null
        return $stmt->fetch() ?: null;
    }
}