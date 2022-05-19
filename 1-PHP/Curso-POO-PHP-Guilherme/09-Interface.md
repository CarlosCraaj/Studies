# Interface
Interface especifica quais métodos uma classe deve implementar, mas sem definir como esses métodos serão tratados. Então no caso na interface é criado o escopo dos métodos.  

Interfaces são definidas como classe, usando a palavra-chave `interface` no lugar de `class`, e todos os métodos declaradas na interface devem ser públicos.  

Para uma classe utilizar a interface ela tem que usar a palavra-chave `implemens`e o nome da clase.  

Todos os métodos declarados na interface, devem ser utilizados de alguma forma nas classes que implementam tal interface.

### Exemplo:
Criando uma interface `IUsuario` e implementando ela, através do `implements IUsuario`.
```php
interface IUsuario 
{
    public function alteraSenha();
    public function getNome();
}
// Criado a interface acima.

abstract class Usuario implements IUsuario
{
    public $id;
    public $nome;
    public $email;
    protected $senha;
    public $telefone;

    public function alteraSenha($senha)
    {
        $this->senha = md5($senha);
    }

    abstract public function getNome();
}
// Usando ´implements´ para "importar" a interface IUsuario
```

Os trechos de código acima foram retirados do Arquivo: [Codigos/Interface-1.php](Codigos/Interface-1.php).