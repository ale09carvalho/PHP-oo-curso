<?php
// algumas funções no PHP trabalha por referencia ex: função que ordena vetores 

$lista = ['a', 'c', 'b'];
// a função sort recebe um vetor e ordena ele
sort($lista); // funçao recebe uma variavel e internamente ela trabalha por referencia
var_dump($lista);
// array(3) { [0]=> string(1) "a" [1]=> string(1) "b" [2]=> string(1) "c" }