# Atributos
- São propriedades de uma determinada classe.
- São "variáveis" que recebem informações para definir uma classe.
    - Definir características de um objeto.
- Os atributos são criados dentro do escopo da classe.

```php
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
```

Os atributos do exemplo acima recebem valor da seguinte forma:

```php
$maria = new Cliente();
$maria->id = 1;
$maria->nome = "Maria";
$maria->email = "maria@email.com";
$maria->senha = "123456";
$maria->telefone = "31634924656";
$maria->assinante = true;
```

Nesse caso recebem atribuição direta por serem do tipo público. Esse conceito vai ser explicado abaixo.  

Executando esse código temos:
```bash
$ php Atributos-1.php
object(Cliente)#1 (6) {
  ["id"]=>
  int(1)
  ["nome"]=>
  string(5) "Maria"
  ["email"]=>
  string(15) "maria@email.com"
  ["senha"]=>
  string(6) "123456"
  ["telefone"]=>
  string(11) "31634924656"
  ["assinante"]=>
  bool(true)
}
```

Os trechos de código acima foram retirados do Arquivo: [Codigos/Atributos-1.php](Codigos/Atributos-1.php).  

## Visibilidade dos Atributos
Na visibilidade dos atributos temos dois principais conceitos: público e privado, que são usados através dos termos reservados `public` e `private`, respectivamente.
- Os atributos do tipo `public`, podem ser alterados em um código sem restrição, como no Arquivo: Atributos-1.php.
- Já atributos do tipo `private`, só podem ser modificados dentro da classe através de métodos/funções.

```php
// Codigos/Atributos-2.php
class Cliente 
{
    public $id;
    ...
    private $senha; // Atributo Privado

    public function exibeNome()
    {...}

    public function alteraSenha($senha)
    {
        $this->senha = md5($senha);
    }
}

$maria = new Cliente();
$maria->id = 1;
...
$maria->alteraSenha('123456'); // Chamada do método que atribui valor ao atributo privado $senha.

var_dump($maria);
```

Executando o código temos:
```bash
$ php Atributos-2.php
object(Cliente)#1 (6) {
  ["id"]=>
  int(1)
  ["nome"]=>
  string(5) "Maria"
  ["email"]=>
  string(15) "maria@email.com"
  ["senha":"Cliente":private]=>
  string(32) "e10adc3949ba59abbe56e057f20f883e"
  ["telefone"]=>
  string(11) "31634924656"
  ["assinante"]=>
  bool(true)
}
```

Os trechos de código acima foram retirados do Arquivo: [Codigos/Atributos-2.php](Codigos/Atributos-2.php).  
