<?php

$nome = 'Maria';
$sobrenome = 'da Silva';

// trabalhar com aspas dentro de aspas ex " ' ' "

// aspas simple dentro de aspas duplas
//print " EXEMPLO  de 'aspas' "; //EXEMPLO de 'aspas'

// ao colocar aspas simples dentro de duplas pode colocar uma variavel - ela e interpretada
//print " EXEMPLO  de 'aspas' $nome "; //EXEMPLO de 'aspas' Maria


//aspas duplas dentro de aspas simples
//print ' EXEMPLO  de "aspas" '; // EXEMPLO de "aspas"

//aspas duplas dentro de aspas simples colocando a variavel ela nao e interpretada
//print ' EXEMPLO  de "aspas" $nome '; //EXEMPLO de "aspas" $nome

// o que pode ocorrer e concatenar com a varialvel do lado de fora.
// print ' EXEMPLO  de "aspas" ' . $nome ; // EXEMPLO de "aspas" Maria

//trabalhando somente com aspas simples:
//utilizando o caracter de backslash para nao considerar a aspa como inicio e fim de cadeia de string e sim caract normal
//print ' EXEMPLO  de \'aspas\' '; // EXEMPLO de 'aspas'


//trabalhando somente com aspas duplas:
print " EXEMPLO  de \"aspas\" "; // EXEMPLO de "aspas"

/*
outros caracteres especiais como:
\t - tabulaçao
\n -quebra de linha
\r - quebra de linha
*/