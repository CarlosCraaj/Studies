## Variáveis e Constantes
No JavaScript existe as "palavras reservadas" `var, let e const`, que são usadas para declarar variáveis e constantes. As duas primeiras são usadas para criar/declarar variáveis, já a terceira é usada para declaração de constantes.  
Em relação as duas primeiras, existem diferença entre elas, mas que irão ser abordadas mais a frente no curso. Porém por regra geral, é ideal o uso de `let` em vez de `var`.  

Alguns exemplos de declarações:
```js
var a = 3;
let b = 4;

var a = 30;
b = 40;

console.log(a,b); // 30 40

a = 300;
a = 400;

console.log(a,b); // 300 400

const c = 5;
console.log(c); // 50
```
Arquivo encontrado em: [variaveisEConstantes.js](/2-JavaScript/CursoWebModerno/1-Fundamentos/Exemplos/variaveisEConstantes.js)  

No exemplo acima foi visto que "redeclaramos" `var a`, mas o mesmo não acontece para `let b`. Pois o `var` é possível redeclarar uma variável dentro de um mesmo escopo.  

Ir para: [1.2 Tipos em JS: Number](02-Number.md)