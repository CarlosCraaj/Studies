## Tipos em JavaScript: String
Uma String é delimitado por aspas duplas `""` e por aspas simples `''`, também existe o template String, que utiliza o símbolo da crase.  
- Para acessar uma posição/caractere de uma string, usa-se a função `charAt()`.
- Para pegar o valor na tabela ASCII/Unicode de um caractere na string, usamos o método `chartCodeAt()`
- Quando precisamos encontrar um caractere ou substring em uma string, usamos o `indexOf()`
- Temos também o método `substring()`, que pega uma string a partir de uma posição inicial e podendo ser limitada por um outro parâmetro.
- Para concater uma string com outra, usamos o método `concat()`. Também podemos usar o sinal de `+` para concatenar.
- O Método `replace()` troca a primeira pesquisa de uma substring na string a ser buscada, para uma string/caractere que queremos trocar. Também pode ser usado regex, que ai podemos trocar todas as ocorrências que queiramos.
- Para separar uma string em uma array, usamos o métood `split()`.

Exemplos no Arquivo: [strings](/2-JavaScript/CursoWebModerno/1-Fundamentos/Exemplos/strings.js)

----
## Template Strings
É uma forma de concatenar strings sem precisar ficar usando o método `concat()` ou o sinal de `+`. E que ainda traz uma questão visual melhor. Para "fazer" o template string, usamos um par de crase, e para colocarmos uma variável, ou também uma expressão matemática, usamos o `${variavel}`.  
Exemplo:  
```js
console.log(`1 + 1 = ${1 + 1}`);
``` 