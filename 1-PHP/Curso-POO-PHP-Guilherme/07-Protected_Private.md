# Diferença entre Protected e Private
Os atributos `private` só podem ser modificados pela classe que ele está inserido. Já no `protected` os atributos podem ser alterados/modificados nas classes filhos.

### Exemplo de Uso:
1° declaramos o atributo na classe, depois criamos um método que faz uso do atributo na classe filho.
```php
class Usuario
{
    public $id;
    public $nome;
    public $email;
    protected $senha; //atributo do tipo protected
    public $telefone;

    public function alteraSenha($senha)
    {
        $this->senha = md5($senha);
    }
}

class Admin extends Usuario
{
    public function setSenha($senha)
    {...}

    public function getSenha()
    {
        return $this->senha;
    }
}
```

Os trechos de código acima foram retirados do Arquivo: [Codigos/Protected_Private-1.php](Codigos/Protected_Private-1.php).
