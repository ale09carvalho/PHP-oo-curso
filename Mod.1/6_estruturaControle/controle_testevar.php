<?php

$valor_venda = 110;

/*
if ($valor_venda > 100)
{
    $resultado =  'muito caro'; // a variavel recebe esse conteudo
}
else
{
     $resultado =  'pode comprar';// ou recebe esse conteudo
}

var_dump($resultado); //string(12) "pode comprar"
*/

// TERNARIO maneira simples baseada num if
// A variavel resultado vai receber se ($valor_venda > 100)? for verdadeira 'muito caro' caso contrario : 'pode comprar'
$resultado =  ($valor_venda > 100)? 'muito caro': 'pode comprar';
var_dump($resultado); // string(10) "muito caro"