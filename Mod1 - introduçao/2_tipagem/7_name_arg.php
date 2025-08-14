<?php
// qdo passar os parametros para uma funçao normalmente passam na ORDEM (passagem de parâmetros posicional)
// 1º posiçao (float $valor) 2º posiçao e (float $periodo) e a 3º posição(float $taxa)
// Porem existe outra forma de passar parâmetros que e a Forma Argumentos Nomeados


declare(strict_types=1);

function calcula_juros_simples( float $valor, float $periodo, float $taxa)
{
    // retornar o valor
    return $valor + $valor * $periodo * ($taxa /100);
}

// chamar a funçao
//print calcula_juros_simples(100,5,10);

//ARGUMENTOS NOMEADOS
// print calcula_juros_simples(valor:200, periodo:5, taxa:10);

// nesse caso pode inverter a ordem - a ordem nao muda nao interfere execução da funçao
print calcula_juros_simples(valor:200, taxa:10, periodo:5);