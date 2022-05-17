# Método Privad
São métodos internos da classe, geralmente usado por outros métodos (podendo eles serem públicos), para resolver um certo problema.

## Método Público para Exemplo
Esse método exibe a Assinatura de um certo Cliente. Ele faz a chamada do método privado `trataValor()`.
```php
public function exibeAssinatura()
{
    $html = "<p>";
    $html .= "<b>Id: </b>$this->id<br>";
    $html .= "<b>Id co Cliente: </b>".$this->id_cliente."<br>";
    $html .= "<b>Título: </b>".$this->titulo."<br>";
    $html .= "<b>Valor: </b>".$this->trataValor($this->valor);
    $html .= "</p>";

    echo $html;
}
```

O método privado `trataValor()` formata um valor decimal, colocando mais 1 casa decimal, e trocando `.` por `,`. Como podemos ver abaixo:

```php
private function trataValor($valor)
{
    return "R$ ".number_format($valor,2,',','.');
}

$assinaturaMaria->exibeAssinatura(); //Chamada do método público
```

### Executando o código temos o seguinte resultado no broser:
```
Id: 1
Id co Cliente: 1
Título: Ass. Vip
Valor: R$ 85,90
```

Os trechos de código acima foram retirados do Arquivo: [Codigos/Privad-1.php](Codigos/Privad-1.php).