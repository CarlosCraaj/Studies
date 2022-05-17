# Getters e Setters
Em Orientação a Objetos, temos 2 métodos essênciais quando trabalhos como atributos privados. Os `Setters (set)` é usado para quando queremos passar um valor para um determinado atributo, já os `Getters (get)` retorna o valor que um determinado atributo contém. 

## Classe criada para Exemplo
Classe criada com todos os atributos do tipo `private`.
```php
class Assinatura
{
    private $id;
    private $id_cliente;
    private $titulo;
    private $valor;
}
```


## Setters da Classe
Set's criados da classe Assinatura.

```php
class Assinatura
{
    private $id;
    private $id_cliente;
    private $titulo;
    private $valor;

    public function setId($valor)
    {
        $this->id = $valor;
    }

    public function setId_cliente($valor)
    {
        $this->id_cliente = $valor;
    }

    public function setTitulo($valor)
    {
        $this->titulo = $valor;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;
    }
}
```

## Getters da Classe
Get's criados da classe Assinatura.

```php
class Assinatura
{
    private $id;
    private $id_cliente;
    private $titulo;
    private $valor;

    public function getId()
    {
        return $this->id;
    }

    public function getId_cliente()
    {
        return $this->id_cliente;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getValor()
    {
        return $this->valor;
    }
}
```

## Exemplo usando a classe Assinatura
Trecho de código que testa os métodos e o resultado no terminal.

### Trecho de código:
```php
$assinaturaMaria = new Assinatura();
$assinaturaMaria->setId(1);
$assinaturaMaria->setId_cliente($maria->id); // $maria->id foi defenido anterior a esse trecho de código.
$assinaturaMaria->setTitulo("Ass. Vip");
$assinaturaMaria->setValor(75.90);

var_dump($assinaturaMaria);
```

### Execução do código:
```bash
$ php Get_Set-1.php
object(Assinatura)#2 (4) {
  ["id":"Assinatura":private]=>
  int(1)
  ["id_cliente":"Assinatura":private]=>
  int(1)
  ["titulo":"Assinatura":private]=>
  string(8) "Ass. Vip"
  ["valor":"Assinatura":private]=>
  float(75.9)
}
```

Os trechos de código acima foram retirados do Arquivo: [Codigos/Get_Set-1.php](Codigos/Get_Set-1.php).  