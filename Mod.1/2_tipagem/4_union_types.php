<?php
# strict_type - Ao informar o tipo de um parâmetro, por exemplo, 
# o PHP irá verificar se o valor passado é compatível com o tipo informado.
/*
o conceito de Type Hints que é basicamente como nós podemos informar os tipos 
que usaremos em alguns locais como em parâmetros e retornos de funções.
Ao informar o tipo de um parâmetro, por exemplo, o PHP irá verificar se
o valor passado é compatível com o tipo informado. Por exemplo:

dentro do conceito float aceita int - converge o contratio nao pode
*/


declare(strict_types=1);

function calcula_juros_simples(int|float $valor, int|float $periodo, int|float $taxa)
{
    return $valor + $valor * $periodo * ($taxa /100);
}
print calcula_juros_simples(100,5,10);