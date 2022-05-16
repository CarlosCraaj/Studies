<?php 

class Cliente 
{
    public $nome;

    public function exibeNome()
    {
        return "Nome: ".$this->nome;
    }
}

$maria = new Cliente(); // Criando um objeto.
$maria->nome = "Maria";

echo $maria->exibeNome();

?>