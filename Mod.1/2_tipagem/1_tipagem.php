<?php
/*
Tipagem de variave no PHP
As variáveis no PHP são representadas por um cifrão ($) seguido pelo nome da variável.
Os nomes de variável são sensíveis a maiúsculas e minúsculas.

O PHP é uma linguagem com tipagem dinâmica, o que significa que por padrão não existe 
a necessidade de especificar o tipo de uma variável

será determinado em tempo de execução. 
é possível restringir estaticamente os tipos através do uso de declarações de tipo.
Os diferentes tipos suportados pelo PHP podem ser encontrados na página de sistema de tipos.

Cada expressão no PHP tem um dos seguintes tipos ou valores internos:
null
bool
int
float (número de ponto flutuante)
string
array
object
callable
resource
*/

/*
$codigo = 5.5;
$nome ='teste';

var_dump ($codigo); // var_dump mostra conteudo 
print '<br>';
var_dump ($nome);
*/

/*
var_dump ('nome' . 'sobrenome'); // concatenar string(13) "nomesobrenome" 
print '<br>';
var_dump ('nome' . 5); //string(5) "nome5" converte o 5 para string
print '<br>';
var_dump (4 . 5); // string(2) "45"print '<br>';
var_dump (4.5); // float(4.5)
print '<br>';
var_dump (4 + 5); // int(9)
print '<br>';
var_dump (4 + '5'); // int(9) int(9) converte o 5 para numerico
print '<br>';
var_dump ('4' + '5');// vai converte par tipo numerico por contata so sinal +

// ------------------------------------------------------------------------
function calcular_imc ($peso, $altura)
{
    return $peso/ ($altura*$altura);
}
var_dump (calcular_imc (75, 1.8) ); // float(23.148148148148145)
print '<br>';
var_dump (calcular_imc ('75', 1.8) ); //float(23.148148148148145)

print '<br>';



// FORNÇAR O TIPO DA VARIAVEL para que seja sempre do tipo float
function calcular_imc ($peso, $altura)
{
    var_dump($peso, $altura);
    print '<br>';
    return $peso/ ($altura*$altura);
}
var_dump (calcular_imc (75, 1.8) ); // int(75) float(1.8) - float(23.148148148148145)
print '<br>';
*/

// Tipagem strita - exigir o que vc declarou
function calcular_imc (float $peso, float $altura): int
{
    var_dump($peso, $altura);
    print '<br>';
    return $peso/ ($altura*$altura);
}
var_dump (calcular_imc (75, 1.8) );// parametro de entrada float(75) float(1.8)  // saida - int(23)


