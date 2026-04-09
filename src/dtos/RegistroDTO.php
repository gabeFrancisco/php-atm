<?php

class RegistroDTO
{
    public function __construct(
        public string $nome,
        public string $sobrenome,
        public string $email,
        public string $cpf,
        public string $senha,
        public EnderecoDTO $endereco
    ) {
    }

    public static function fromRequest(array $data)
    {
        return new self(
            nome: htmlspecialchars(trim($data['nome'])),
            sobrenome: htmlspecialchars(trim($data['sobrenome'])),
            email: filter_var($data['email'], FILTER_VALIDATE_EMAIL) ?: throw new InvalidArgumentException("Email inválido!"),
            cpf: htmlspecialchars(trim($data['cpf'])),
            senha: htmlspecialchars(trim($data['senha'])),
            endereco: EnderecoDTO::fromRequest($data)
        );
    }
}