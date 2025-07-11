<?php

$a = 'teste';
$b = 10.1;
$c = [1,2,3]; // variavel  indexavel
$d = [1 => 'a',2 => 'b',3 => 'c']; // variavel tipo vetor

//print $a;
//echo 'a'; 'b', $a // o echo permite imprimir em tela varios argumentos

//  isso é um comentario

/*
* comentario de varias linhas
* 
*
*/
//**** var_dump e print_r  *******
// usado para debugar algo em tela o var_dump e o print_r dar informaçoes sobre a varialvel
// forma de fazer  um debug rápido e acompanha a variavel no meio da execuçao


// var_dump mostra a variavel de maneira ampla esmiuçada tipo tamanho e estrutura
// dar o tipo o tamanho a posiçao e a estrutura
var_dump ($a); // string(5) "teste"
var_dump ($b); // float(10.1)
var_dump ($c); // array(3) { [0]=> int(1) [1]=> int(2) [2]=> int(3) }
var_dump ($d); // array(3) { [1]=> string(1) "a" [2]=> string(1) "b" [3]=> string(1) "c" }

// um pouco mais simplificido nao diz o tipo nem o tamanho da variavel
print_r ($c); // Array ( [0] => 1 [1] => 2 [2] => 3 )