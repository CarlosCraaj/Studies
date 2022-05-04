<?php

class Colaborador
{
    private $nome;
    private $endereco;
    private $cargo;

    public function __construct($n, $e, $c)
    {
        $this->nome = $n;
        $this->endereco = $e;
        $this->cargo = $c;
    }

    public function __toString()
    {
        // $varReturn = $this->nome . ', ' . $this->endereco . ', ' . $this->cargo;
        $varReturn = "{$this->nome}, {$this->endereco}, {$this->cargo}";
        return $varReturn;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($n){
        $this->nome = $n;
    }
    
}

$class = new Colaborador("Carlos", "Rua São Claret", "Estagiário");
// echo "{$class} \n{$class->getNome()}";
echo $class . "\n" . $class->getNome() . PHP_EOL;
$class->setNome("Reginaldo Rossi");
echo $class . "\n" . $class->getNome();

?>