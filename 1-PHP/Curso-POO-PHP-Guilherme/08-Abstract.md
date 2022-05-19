# Classes e métodos Abstratos
Quando uma classe pai, não é utilizada diretamente, ou seja quando não é criada/instanciada um objeto dela, podemos colocar ela como abstrata, usando a palavra reservada `abstract`, exemplo: class `abstract class Usuario {}`.  
Já um método abstrato, ele não é implementado na classe abstrata. Só é feito um escopo, e o método abstrato é implementado OBRIGATORIAMENTE nas classes filhos, pois se não foi implementado é gerado erro.

## Exemplo:
No Exemplo abaixo temos a classe Usuario como `abstract`, e o método `getNome()` como um método `abstract` também.
```php
abstract class Usuario
{
    public $id;
    public $nome;
    public $email;
    protected $senha;
    public $telefone;

    public function alteraSenha($senha)
    {...}

    abstract public function getNome();
}

class Admin extends Usuario
{
    public function setSenha($senha)
    {...}

    public function getSenha()
    {...}
    
    public function getNome()
    {
        return $this->nome;
    }
}

```

Os trechos de código acima foram retirados do Arquivo: [Codigos/Abstract-1.php](Codigos/Abstract-1.php).
