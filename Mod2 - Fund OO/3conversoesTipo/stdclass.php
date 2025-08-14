<?php
/*
CONVERÇOES DE TIPO DE OBJETO
stdClass - Uma classe vazia genérica com propriedades dinâmicas.
Objetos desta classe podem ser instaciados com o operador new ou criados por conversores de tipo para o objeto. 

estrutura de memeria - objeto que pode ser utilizada para carregar uma serie de informaçoes dentro dela stand class
estrutua vazia para criaação de objetos. 
*/

$produto = new stdClass;
$produto->descricao = 'Chocolate';
$produto->estoque = 100;
$produto->preco = 7;

echo'<pre>';
var_dump($produto);
/*
object(stdClass)#1 (3) {
  ["descricao"]=>
  string(9) "Chocolate"
  ["estoque"]=>
  int(100)
  ["preco"]=>
  int(7)
}
*/
//print $produto->descricao;
//echo '<pre>';
// Chocolate