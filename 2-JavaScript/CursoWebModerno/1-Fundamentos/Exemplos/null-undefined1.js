const a = {name: 'Teste'};
console.log(a);

const b = a;
console.log(b);

b.name = 'Opa';
console.log(a);

let c = 3;
let d = c;
d++;
console.log(d);
console.log(c);
// Quando se trabalha com tipos primitivos é feito uma cópia 
// por valor e não por referência. Por isso as variáveis `c` e `d`
// tem valores diferentes.