<?php

class SiteInfo
{
    public static $nome= "Meu Site";
    public static $descricao= "Site de Vendas";
}

class Util
{
    public static function trataValor($valor)
    {
        return "R$ ".number_format($valor,2,',','.');
    }
}

interface IUsuario 
{
    public function alteraSenha($senha);
    public function getNome();
}

abstract class Usuario implements IUsuario
{
    public $id;
    public $nome;
    public $email;
    // private $senha;
    protected $senha;
    public $telefone;

    public function alteraSenha($senha)
    {
        $this->senha = md5($senha);
    }

    abstract public function getNome();
}

class Admin extends Usuario implements IUsuario
{
    public function setSenha($senha)
    {
        $senha = $senha.$this->email;
        parent::alteraSenha($senha);
    }

    public function getSenha()
    {
        return $this->senha;
    }
    
    public function getNome()
    {
        return $this->nome;
    }
}

class Gerente extends Usuario implements IUsuario
{
    public function getNome()
    {
        return $this->nome;
    }
}

class Vendedor extends Usuario implements IUsuario
{
    public function getNome()
    {
        return $this->nome;
    }
}

class Cliente extends Usuario implements IUsuario
{
    public $assinante;

    public function exibeNome()
    {
        return "Nome: ".$this->nome;
    }

    public function alteraSenha($senha)
    {
        $this->senha = md5($senha);
    }

    public function getNome()
    {
        return $this->nome;
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
        // $html .= "<b>Valor: </b>".$this->trataValor($this->valor);
        $html .= "<b>Valor: </b>".Util::trataValor($this->valor);
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

$murilo = new Admin();
$murilo->id = 1;
$murilo->nome = "Murilo";
$murilo->email = "murilo@email.com";
$murilo->telefone = "234423432";
$murilo->setSenha('23456');
echo $murilo->getSenha();

var_dump($murilo);

$gustavo = new Vendedor();
$gustavo->id = 1;
$gustavo->nome = "Gustavo";
$gustavo->email = "gustavo@email.com";
$gustavo->telefone = "234423432";
$gustavo->alteraSenha('23456');

echo 'Nome do site: '.SiteInfo::$nome . PHP_EOL;
echo 'Descrição do site: '.SiteInfo::$descricao . PHP_EOL;

?>