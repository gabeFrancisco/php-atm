<?php

class RegistroDTO
{
    public $nome;
    public $sobrenome;
    public $email;
    public $cpf;
    public $senha;
    public EnderecoDTO $endereco;

    public function __construct(
        string $nome,
        string $sobrenome,
        string $email,
        string $cpf,
        string $senha,
        EnderecoDTO $endereco
    ) {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->email = $email;
        $this->cpf = $cpf;
        $this->senha = $senha;
        $this->endereco = $endereco;
    }
}