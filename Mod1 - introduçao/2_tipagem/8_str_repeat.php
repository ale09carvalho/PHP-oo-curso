<?php
// Funçao str_repeat - uma função que repete uma string n vezes

function calcula_juros_simples( float $valor, float $periodo, float $taxa = 10 )
{
    // retornar o valor
    return $valor + $valor * $periodo * ($taxa /100);
}

// print str_repeat(string: '.o0o.', times: 5);
// .o0o..o0o..o0o..o0o..o0o.
// funciona tanto par a funçoes nossas como para funçoes intern do php

// PARAMETROS OPCIONAIS 
// - SUPOR QUE A TAXA DE JUROS SEJA OPCIONAL
// PARA SER OPCIONAL ELA PRECISA TER UM VALOR DEFULT ($taxa = 10 ) SE VC NAO PASSAR O VALOR SERA DE 10%

// CHAMAR A FUNÇAO
//print calcula_juros_simples(valor:100, periodo:5); // 150

// INVERTER A ORDEM
print calcula_juros_simples(periodo:5, valor:100); // 150






