# Composer com PSR-4
- Instalar composer em um projeto: `composer init`.  
- Ir no link: `https://getcomposer.org/doc/01-basic-usage.md#autoloading`
    - Copiar um trecho de código de autoload que vai ser colocado no `composer.json`
O Código vai ser algo parecido com isso:
```json
"autoload": {
    "psr-4": {"Acme\\": "src/"} // no nosso exemplo, trocaremos 'Acme' por 'App' e 'src/' por 'app/'
}
```

- Rodar `composer update` para gerar a pasta vendor.
- Copiar o primeiro código no Link do site `getcomposer` na parte de `Autoloading`.
    - Trecho copiado é parecido com `require __DIR__ . '/vendor/autoload.php';`.
- Colar esse trecho no código a ser usado, exemplo: `index.php`, no nosso caso: Composer-1.php
- Nos arquivos do projeto colocaremos `namespace App;` (App, no caso é o valor que substitiu o Acme no .json).
- Agora "importamos" as classes usadas, com o `use` no arquivo Composer-1.php.
    - `use App\Util;` e `use App\SiteInfo;`
