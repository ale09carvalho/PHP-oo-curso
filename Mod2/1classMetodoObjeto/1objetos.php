<?php
/*
Uma classe sempre começa com a palavra  e as chaves -> class nome {}
Dentro da chaves se declara os atributos e os metodos;
Para definir os atributos utilizamos uma das 3 palavras;
(public - private - protected) ==> aquie se defini como o atributo vai poder ser manipulado.

-> o Atributo Public - pode ser manipulados de dentro e de fora da classe - isso não é exatamente uma boa pratica
na programaçao;
-> Em php o ideal e ter 1 arquivo somente com as definiçao da classe e outro arquivo com o programa 
que usa aquela classe.
*/

// 1º criar a estrutura de uma classe com 3 atributos
class Produto
{
    public $descricao;
    public $estoque;
    public $preco;
}
/* 2º Criar um objeto da classe;
- pode criar qtos objetos  desejar;
- nesse caso teremos 2 variavel - 2 regiao distinta da memoria apontando para um local da memoria e dentro 
desse local;
- Agora teremos a estrutura da class com 3 atributos
---------------
- Definir um atributo utilizando a forma public de forma simples----> $p1 ->descricao = ......
---------------*/
// Criar os objetos 
$p1 = new Produto;

// definir os atributos:
$p1 ->descricao =  'Chocolate';
$p1 ->estoque =  10;
$p1 ->preco =  5;

// agora definir os 3 atributos do objeto $p2 ->descricao =.........
// Criar os objetos 
$p2 = new Produto;

// definir os atributos:
$p2 ->descricao =  'Café';
$p2 ->estoque =  20;
$p2 ->preco =  10;

// Exibir em tela um de seus atributos
print $p1 ->descricao; // Chocolate
echo '<pre>';
print $p2 ->descricao; //Café

// exibir o objeto inteiro com o comando var_dump
echo '<pre>';
var_dump($p1);
echo '<pre>';

/* resultado
object(Produto)#1 (3) {
  ["descricao"]=> string(9) "Chocolate"
  ["estoque"]=> int(10)
  ["preco"]=> int(5)
}
*/
echo '<pre>';
var_dump($p2);
echo '<pre>';
/*
object(Produto)#2 (3) {
  ["descricao"]=> string(5) "Café"
  ["estoque"]=> int(20)
  ["preco"]=> int(10)
}
*/
// Temos 2 objetos distinto na memoria
print_r ($p1);
echo '<pre>';
print_r ($p2);

/* print_r exibe de uma maneira um pouco mais simplificada mas visual, diferente do var_dump que mostro o tipo de variavel

Produto Object
(
    [descricao] => Chocolate
    [estoque] => 10
    [preco] => 5
)
Produto Object
(
    [descricao] => Café
    [estoque] => 20
    [preco] => 10
)
*/

/*
a respeito do atributo public - por exemplo o atributo $estoque - com a definiçao de public ele apache_child_terminate
qualquer coisa que seja gravada do lado de fora da classe exemplo poderia colocar na definiçao $p2 ->estoque =  'vinte'
uma string com a palavra vinte no campo de estoque o que sera uma INCOSISTÊNCIA. Tendp que evitar que outros programadores
possa gravar valores incosistente dentro de um objetos.
Public permite a gravação de qualquer valor de atributo tanto dentro qto fora da classe de maneira livre
*/