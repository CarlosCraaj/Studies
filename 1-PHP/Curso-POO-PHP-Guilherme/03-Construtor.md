# Método Construtor
O método construtor é usado para atribuir valor aos atributos do Objeto instânciado. No php temos uma `palavra/termo reservado` para o método construtor, que no caso seria o `__construct`.

## Exemplo de um construtor
Os dados que serão atribuidos aos atributos são passados como parâmetros no construtor.
```php
public function __construct($id, $id_cliente, $titulo, $valor)
{
    $this->id = $id;
    $this->id_cliente = $id_cliente;
    $this->titulo = $titulo;
    $this->valor = $valor;
}
```

## Construtor Vazio
No exemplo acima, só é válido para construtor que recebe valores no parâmetro, então se executarmos algo como `$assinaturaMaria = new Assinatura();`, será gerado erro. Então para evitor erros, nos parâmetros colocamos as variáveis recebendo `null`, para caso não receberem valores o objeto ser criado sem gerar erro.

### Exemplo:
```php
public function __construct($id = null, $id_cliente = null, $titulo = null, $valor = null)
{
    $this->id = $id;
    $this->id_cliente = $id_cliente;
    $this->titulo = $titulo;
    $this->valor = $valor;
}
```

## Instânciando Objeto com construtor.
Semelhante a instância de um objeto sem passar parâmetros.

### Exemplo:
```php
$assinaturaMaria = new Assinatura(1, $maria->id, "Ass. Vip", 85.90);
```

### Executando o código temos:
```php
$ php Construtor-1.php
object(Assinatura)#2 (4) {
  ["id":"Assinatura":private]=>
  int(1)
  ["id_cliente":"Assinatura":private]=>
  int(1)
  ["titulo":"Assinatura":private]=>
  string(8) "Ass. Vip"
  ["valor":"Assinatura":private]=>
  float(85.9)
}
```

Os trechos de código acima foram retirados do Arquivo: [Codigos/Construtor-1.php](Codigos/Construtor-1.php).  