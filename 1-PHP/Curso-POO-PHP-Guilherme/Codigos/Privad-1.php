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
    
    public function __construct($id = null, $id_cliente = null, $titulo = null, $valor = null)
    {
        $this->id = $id;
        $this->id_cliente = $id_cliente;
        $this->titulo = $titulo;
        $this->valor = $valor;
    }

    public function exibeAssinatura()
    {
        $html = "<p>";
        $html .= "<b>Id: </b>$this->id<br>";
        $html .= "<b>Id co Cliente: </b>".$this->id_cliente."<br>";
        $html .= "<b>Título: </b>".$this->titulo."<br>";
        $html .= "<b>Valor: </b>".$this->trataValor($this->valor);
        $html .= "</p>";

        echo $html;
    }

    private function trataValor($valor)
    {
        return "R$ ".number_format($valor,2,',','.');
    }

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
$maria->alteraSenha('123456');
$maria->telefone = "31634924656";
$maria->assinante = true;

$assinaturaMaria = new Assinatura(1, $maria->id, "Ass. Vip", 85.90);
$assinaturaMaria->exibeAssinatura();

// var_dump($assinaturaMaria);

?>