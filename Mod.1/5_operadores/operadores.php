<?php

//$valor = 100;

/*
// modificar o valor da variavel
// a variavel receber o proprio conteudo com resultado de um calculo
//$valor = $valor + 5;
//var_dump($valor);// int(105)
//-----------------------------
//operador de incremento 
$valor ++;
var_dump($valor);// int(101)
//--------------------------
//operador incremento  em x unidades
$valor += 5;
var_dump($valor);// int(105)
//---------------
//operador decremento  em x unidades
$valor -= 5;
var_dump($valor);// int(95)
//------------------------
//operador multplica propria variavel 
$valor *= 5;
var_dump($valor);// int(500)
//------------------------
//operador divide  por uma certa unidade 
$valor /= 5;
var_dump($valor);// int(20)
//------------------------

*/

/*
//-----CARACTERISTICAS incremento a direita e a esquerda da variavel-----
// pegar conteudo de uma variavel incrementar e jogar em outra variavel
$teste = $valor ++; 
// o operador de incremento qdo usado a direita da variavel - 1º retorna o proprio conteudo da variavel 2º depois incrementa
var_dump($valor); // int(101)
var_dump($teste); // int(100)
//------------------------------
$teste = ++ $valor; 
// o operador de incremento qdo usado a esquerda da variavel- 1º incrementa depois  retorna para a variavel teste
var_dump($valor); // int(102)
var_dump($teste); // int(102)
*/


//---------------------------------------------
//CALCULO COM OPERADORES ARITMÉTICOS [+ - * / %]
// prioridades 
//$a = 2;
//$b = 4;
//echo $a+3*4+5*$b;// 1º * -- 3*4 = 12 | 5*4 = 20 e depois a adicaço 32+2= 34
//echo ($a+3) *4 + (5*$b); // força os parentes serem 1º executadas 40
//-----------------------------------------------

//---------------------------------------------
// OPERADORES DE COMPARAÇAO [< > <= >= !== | ==  ===(C/ 3 iguais compara o tipo)

/*
$valor = 100;
if ($valor > 50)
{
    echo var_dump($valor);//int(100)
}
*/

/*
// COMPARAÇAO COM ==
$valor1 = 100;
$valro2 = '100';
if ($valor1 == $valro2)
{
    echo 'são iguais';//int(100)
}
*/

/*
// comparaçao mai refinada com === comparação de TIPO
$valor1 = 100;
$valro2 = '100';
if ($valor1 === $valro2)
{
    echo 'são iguais';
}
else
    echo 'nao são iguais';// conteudo das variavis sao diferentes
*/

// OPERADORES LOGICOS 
$salario = 500;
$cargo = 'gerente';

// ANDA ou && - vai observar o 1º args e ao mesmo tempo o segundo argumento
if ($salario > 800 OR  $cargo == 'gerente') 
{
    echo 'ok';
}

// UM OU OUTRO -- OR OU 2 PIPES ||
//if ($salario > 800 OR $cargo == 'gerente') 
//{
//    echo 'ok';
//}

// PARA FAZER A NEGAÇÃO - ! Ele vai inverter avalia expresao para fazer a negaço dela
if (! ($salario > 800 OR  $cargo == 'gerente')) 
{
    echo 'ok';
}