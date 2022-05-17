# Herança
A Herança resolve o problema da repetição de códigos que usam os mesmos atributos. Por exemplo, uma classe usuário que possui os atributos: `id, nome, email, senha e telefone`. Uma classe Gerente herda esses atributos, pois antes de tudo é um usuário.

Para usar o conceito de herança, usamos a palavra reserva `extends`, exemplo: `class Gerente exteds Usuario`.

## Classe "Pai/Mãe" e Classe "Filho/a"
Abaixo temos um exemplo de declaração de classes de Herança.
```php
class Usuario
{
    public $id;
    public $nome;
    public $email;
    private $senha;
    public $telefone;

    public function alteraSenha($senha)
    {
        $this->senha = md5($senha);
    }
}

// Usuario é a classe "pai"

class Admin extends Usuario
{

}

class Gerente extends Usuario
{

}

class Vendedor extends Usuario
{

}

// As classes Admin, Gerente e Vendedor são classes "filho"

```

### Exemplo de código para testar:
```php
$maria = new Cliente();
$maria->id = 1;
$maria->nome = "Maria";
$maria->email = "maria@email.com";
$maria->alteraSenha('123456');
$maria->telefone = "31634924656";
$maria->assinante = true;

$assinaturaMaria = new Assinatura(1, $maria->id, "Ass. Vip", 85.90);
$assinaturaMaria->exibeAssinatura();

$murilo = new Cliente();
$murilo->id = 1;
$murilo->nome = "Murilo";
$murilo->email = "murilo@email.com";
$murilo->alteraSenha('123456');

var_dump($murilo);
```

### Executando o código:
```
Id: 1
Id co Cliente: 1
Título: Ass. Vip
Valor: R$ 85,90

object(Cliente)#3 (5) { ["assinante"]=> NULL ["id"]=> int(1) ["nome"]=> string(6) "Murilo" ["email"]=> string(16) "murilo@email.com" ["senha"]=> string(32) "e10adc3949ba59abbe56e057f20f883e" }
``` 

Os trechos de código acima foram retirados do Arquivo: [Codigos/Heranca-1.php](Codigos/Heranca-1.php).
