# Parent
Usamos a palavra reservada `parent` para não precisar de colocar o nome da classe "pai", então caso essa classe pai tenha o nome modificado, não precisar ficar alterando.

### Exemplo:
No exemplo abaixo, queremos usar o método `alteraSenha()` da classe Usuario. 
```php
public function setSenha($senha)
{
    $senha = $senha.$this->email;
    Usuario::alteraSenha($senha);
}
```

Então para que usemos o método `alteraSenha()` da classe pai, usamos o `parent`. Como visto abaixo:

```php
public function setSenha($senha)
{
    $senha = $senha.$this->email;
    parent::alteraSenha($senha);
}
```

Os trechos de código acima foram retirados do Arquivo: [Codigos/Parent-1.php](Codigos/Parent-1.php).