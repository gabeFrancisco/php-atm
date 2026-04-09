<?php

class EnderecoDTO
{
    public $rua;
    public $numero;
    public $complemento;
    public $bairro;
    public $cidade;
    public $estado;
    public $cep;

    public function __construct(
        string $rua,
        string $numero,
        string $complemento,
        string $bairro,
        string $cidade,
        string $estado,
        string $cep
    ) {
        $this->rua = $rua;
        $this->numero = $numero;
        $this->complemento = $complemento;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->cep = $cep;
    }
}