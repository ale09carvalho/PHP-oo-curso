<?php
/*
CONVERÇOES DE TIPO DE OBJETO
estrutura de memeria - objeto que pode ser utilizada para carregar uma serie de informaçoes dentro dela stand class
estrutua vazia para criaação de objetos. 

Como converter um objeto em um vetor e um vetor em objetos
----------------CONVERÇAO DE TIPO-----------------------
*/
$produto = new stdClass;
$produto->descricao = 'Chocolate';
$produto->estoque = 100;
$produto->preco = 7;

// converter obj em array - transforma um objeto em um vetor.
// variavel tipo $vetor1 array antes o objetos
$vetor1 = (array) $produto;

$vetor2 = ['descricao' => 'Café', 
            'estoque'=>100,
            'preco'=> 7];

$produto2 = (object) $vetor2;// pegar o vetor converter para objeto - gerar um objeto produto2 - serie de atributos publicos (desc, estoque e preço)

// para acessar algum atributo especifico
//var_dump($vetor1['descricao']);

echo'<pre>';
var_dump($vetor1);
echo'<pre>';

echo'<pre>';
var_dump($produto2);
echo'<pre>';
print $produto2->descricao;//Café
/*
array(3) {
  ["descricao"]=>
  string(9) "Chocolate"
  ["estoque"]=>
  int(100)
  ["preco"]=>
  int(7)
}
object(stdClass)#2 (3) {
  ["descricao"]=>
  string(5) "Café"
  ["estoque"]=>
  int(100)
  ["preco"]=>
  int(7)
}
*/