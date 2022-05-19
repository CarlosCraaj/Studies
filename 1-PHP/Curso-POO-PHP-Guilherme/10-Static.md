# Atributos e Métodos Estático/Static
Atributos estáticos não precisam de ter um objeto criado para usar-lós. Para usar um atributo que é estático, usa-se dois pontos duplos `::`, com o nome da classe antes e o atributo depois.  
Exemplo:
```php
// classe com declaração dos atributos estáticos.
class SiteInfo
{
    public static $nome= "Meu Site";
    public static $descricao= "Site de Vendas";
}

// Uso do atributo static
echo 'Nome do site: '.SiteInfo::$nome . PHP_EOL;
echo 'Descrição do site: '.SiteInfo::$descricao . PHP_EOL;
```

Resultado:
```
$ php Static-1.php
Nome do site: Meu Site
Descrição do site: Site de Vendas
```

O mesmo ocorre para método estáticos, precisamos apenas de usar dois pontos duplos para usar o método estático.
Exemplo:
```php
// Classe com o método estático
class Util
{
    public static function trataValor($valor)
    {
        return "R$ ".number_format($valor,2,',','.');
    }
}

// Classe que está refereciando o método estático
class Assinatura
{
    // Variaveis
    
    public function __construct($id = null, $id_cliente = null, $titulo = null, $valor = null)
    {...}

    public function exibeAssinatura()
    {
        $html = "<p>";
        $html .= "<b>Id: </b>$this->id<br>";
        $html .= "<b>Id co Cliente: </b>".$this->id_cliente."<br>";
        $html .= "<b>Título: </b>".$this->titulo."<br>";
        $html .= "<b>Valor: </b>".Util::trataValor($this->valor);
        $html .= "</p>";

        echo $html;
    }
}
```

Os trechos de código acima foram retirados do Arquivo: [Codigos/Static-1.php](Codigos/Static-1.php).