<?php

class EnderecoDTO
{
    public function __construct(
        public string $rua,
        public string $numero,
        public string $complemento,
        public string $bairro,
        public string $cidade,
        public string $estado,
        public string $cep
    ) {

    }

    public static function fromRequest(array $data)
    {
        return new self(
            rua: htmlspecialchars(trim($data['rua'])),
            numero: htmlspecialchars(trim($data['numero'])),
            complemento: htmlspecialchars(trim($data['complemento'])),
            bairro: htmlspecialchars(trim($data['bairro'])),
            cidade: htmlspecialchars(trim($data['cidade'])),
            estado: htmlspecialchars(trim($data['estado'])),
            cep: htmlspecialchars(trim($data['cep'])),
        );
    }
}