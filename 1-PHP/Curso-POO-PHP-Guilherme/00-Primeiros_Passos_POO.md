# Primeiros Passos POO
- O grande foco do POO é o reaproveitamento de código.  
- Quando se modifica a classe, todo o código que a usa, vai ser modificado/afeto.
    - Isso é muito bom para manutenções no projeto.
- Ela traz uma implementação muito próxima da realidade.
- Por convenção, as classes são criadas no singular e a 1a letra maiúscula.
    - `class Cliente {}`

Exemplo de Classe e Instância de objeto:
```php
class Cliente 
{
    public $nome;

    public function exibeNome()
    {
        return "Nome: ".$this->nome;
    }
}

$maria = new Cliente(); // Criando um objeto.
$maria->nome = "Maria";

echo $maria->exibeNome();
```

Executando o código acima temos:
```bash
Windows@Windows-PC MINGW64 ~/Desktop/Studies/1-PHP/Curso-POO-PHP-Guilherme/Codigos (main)
$ php Primeiros_Passos_POO-1.php
Nome: Maria
```

[Código Acima](Codigos/Primeiros_Passos_POO-1.php)