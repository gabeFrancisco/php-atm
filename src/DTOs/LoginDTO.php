<?php

namespace App\DTOs;

class LoginDTO
{
    public function __construct(
        public string $cpf,
        public string $senha
    ) {
    }

    public static function fromRequest(array $data)
    {
        return new self(
            cpf: htmlspecialchars(trim($data['cpf'])),
            senha: htmlspecialchars(trim($data['senha'])),
        );
    }
}