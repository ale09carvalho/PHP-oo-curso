<?php
$cores = ['vermelho', 'verde', 'amarelo'];

// acrescentar uma cor ao vetor

//$cores [] = 'ciano';
//array(4) { [0]=> string(8) "vermelho" [1]=> string(5) "verde" [2]=> string(7) "amarelo" [3]=> string(5) "ciano" }
//var_dump($cores);

//---------------------------
//outra maneir de acrescenta uma cor e utilizando a funçao array_push
//array_push($cores, 'ciano');
//var_dump($cores);
//array(4) { [0]=> string(8) "vermelho" [1]=> string(5) "verde" [2]=> string(7) "amarelo" [3]=> string(5) "ciano" }

//---------------------------------------------------------------
// outra funçao que adciona no inicio do vetor e o [array_unshift] adciona no inico do vetor
//array_unshift($cores, 'ciano');
//var_dump($cores);
// array(4) { [0]=> string(5) "ciano" [1]=> string(8) "vermelho" [2]=> string(5) "verde" [3]=> string(7) "amarelo" }

//---------------------------------------------------------------
// outra funçao que remove uma posição do vetor array_shift - removeu a 1° posiçao
//array_shift($cores);
//var_dump($cores);
// array(2) { [0]=> string(5) "verde" [1]=> string(7) "amarelo" }

//---------------------------------------------------------------
// outra funçao array_pop - remove a ultima  posição do vetor
//array_pop($cores);
//var_dump($cores);
// array(2) { [0]=> string(8) "vermelho" [1]=> string(5) "verde" }

//---------------------------------------------------------------
// funçao que reverte a ordem do vetor 
//$cores = array_reverse($cores);
//var_dump($cores);
// array(3) { [0]=> string(7) "amarelo" [1]=> string(5) "verde" [2]=> string(8) "vermelho" }

//---------------------------------------------------------------
// funçao que mesclar 2 vetores
$resultado = array_merge($cores, ['ciano', 'magenta']);
var_dump($resultado);
// array(5) { [0]=> string(8) "vermelho" [1]=> string(5) "verde" [2]=> string(7) "amarelo" [3]=> string(5) "ciano" [4]=> string(7) "magenta" }

//---------------------------------------------------------------

