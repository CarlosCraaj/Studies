<?php

class Cliente 
{
    public $id;
    public $nome;
    public $email;
    private $senha;
    public $telefone;
    public $assinante;

    public function exibeNome()
    {
        return "Nome: ".$this->nome;
    }

    public function alteraSenha($senha)
    {
        $this->senha = md5($senha);
    }
}

class Assinatura
{
    private $id;
    private $id_cliente;
    private $titulo;
    private $valor;

    public function setId($valor)
    {
        $this->id = $valor;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId_cliente($valor)
    {
        $this->id_cliente = $valor;
    }

    public function getId_cliente()
    {
        return $this->id_cliente;
    }

    public function setTitulo($valor)
    {
        $this->titulo = $valor;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    public function getValor()
    {
        return $this->valor;
    }
}

$maria = new Cliente();
$maria->id = 1;
$maria->nome = "Maria";
$maria->email = "maria@email.com";
// $maria->senha = "123456";
$maria->alteraSenha('123456');
$maria->telefone = "31634924656";
$maria->assinante = true;

$assinaturaMaria = new Assinatura();
$assinaturaMaria->setId(1);
$assinaturaMaria->setId_cliente($maria->id);
$assinaturaMaria->setTitulo("Ass. Vip");
$assinaturaMaria->setValor(75.90);

var_dump($assinaturaMaria);

?>