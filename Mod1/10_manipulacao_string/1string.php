<?php

$nome = 'Maria';
$sobrenome = 'da Silva';

//$nome_completo = $nome  .  $sobrenome; // string(13) "Maria da Silva"
//$nome_completo = "$nome $sobrenome"; //string(14) "Maria da Silva"
//$nome_completo = "$nome - $sobrenome"; // $nome_completo = "$nome $sobrenome";
//$nome_completo = '$nome $sobrenome'; //string(16) "$nome $sobrenome" aspa simple e uma string literal 

$nome_completo = "{$nome} - {$sobrenome}x"; // com delimitadores { } para saber onde começa e onde termina a variavel
// string(17) "Maria - da Silvax"


var_dump($nome_completo);