<?php

namespace App\DTOs;

class RegistroDTO
{
    public function __construct(
        public UsuarioDTO $usuario,
        public EnderecoDTO $endereco
    ) {
    }

    public static function fromRequest(array $data)
    {
        return new self(
            usuario: UsuarioDTO::fromRequest($data),
            endereco: EnderecoDTO::fromRequest($data)
        );
    }
}