## Tipos em JavaScript: Number
O tipo `Number` no JavaScript suporte os tipos `int` e `float/double`. Além da declaração já conhecida: `const peso1 = 1.0`, também é possível declarar usando um "método" chamado `Number()`, exemplo: `const peso2 = Number('2.0')`.  
Exemplificando temos:
```js
const peso1 = 1.0;
const peso2 = Number('2.0');
console.log(peso1, peso2); // 1 2
```

Para confirmar o tipo da variável, é só usarmos `typeof` antes da variável, e retornará `Number`, mas caso queiramos saber o tipo exato, por exemplo se é um inteiro, podemos usar a função `Number.isInteger()`.  
Exemplo:
```js
const peso1 = 1.0;
console.log(Number.isInteger(peso1)); // true
console.log(typeof peso1); // number
```

O trecho de código acima é considerado inteiro, pois a parte fracionária dele é 0, então é pego somente a parte inteira.  

Para limitarmos o número de casas decimais, usamos o método `toFixed()`. E também temos um método que converta o number para uma String e até mesmo para binário, que é o método `toString()`.  
Exemplo:
```js
const avaliacao1 = 9.871;
const avaliacao2 = 6.871;

const total = avaliacao1 * peso1 + avaliacao2 * peso2;
const media = total / (peso1 + peso2);
console.log(media.toFixed(2)); // 7.87
console.log(media.toString()); // 7.8709999999999996
console.log(media.toString(2)); // 111.11011110111110011101101100100010110100001110010101
```
É também importante Lembrar que `number` é o tipo de uma variável e `Number é uma função`. Para confirmar é só usar `typeof Number`.  
Exemplo:
```js
console.log(typeof media); // number
console.log(typeof Number); // function
``` 
Todos os trechos de códigos acima, estão no Arquivo: [numeros.js](/2-JavaScript/CursoWebModerno/1-Fundamentos/Exemplos/numeros.js)

----
## Alguns Cuidados
Para se trabalhar com `Number` em JavaScript, é necessário ter alguns cuidados. Pois ele pode por exemplo fazer que uma operação que envolva uma `string numérica`, possa efetuar uma operação matemática com um `Number`, ex:`"10"/2`.  
Alguns outros exemplos de cuidados estão no Arquivo: [numerosAlgunsCuidados](/2-JavaScript/CursoWebModerno/1-Fundamentos/Exemplos/numerosAlgunsCuidados.js) 

----
## Usando Math
No JavaScript para usar alguns métodos prontos para ajudar em operações matemáticas, existe o `Math`. Ele possui métodos/constantes para por exemplo pegar o número de "PI", calcular a potência e etc.  
Alguns Exemplos em: [math](/2-JavaScript/CursoWebModerno/1-Fundamentos/Exemplos/math.js)

Ir para: [1.3 Tipos em JS: String](02-String.md)