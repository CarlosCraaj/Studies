<?php

class Cliente 
{
    public $id;
    public $nome;
    public $email;
    public $senha;
    public $telefone;
    public $assinante;

    public function exibeNome()
    {
        return "Nome: ".$this->nome;
    }
}

$maria = new Cliente();
$maria->id = 1;
$maria->nome = "Maria";
$maria->email = "maria@email.com";
$maria->senha = "123456";
$maria->telefone = "31634924656";
$maria->assinante = true;

var_dump($maria);

?>