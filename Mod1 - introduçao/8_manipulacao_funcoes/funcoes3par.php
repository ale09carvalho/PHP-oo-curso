<?php
// passagem de paramentros

function incrementa(&$variavel, $valor)
{
    $variavel += $valor; // variavel vai receber ela mesmo + o valor
}

$teste = 100;
incrementa($teste, 20); // a variavel sera acrescentada na qtd de 20
var_dump($teste); 
// int(100)
// (&$variavel,..--> int(120)

/*
 1º teste - começou com 100 colocou um incremento de 20 unid e ela continua com 100
 dentro da funçao tem [$variavel += $valor;] as variaveis que nao sao tipo objeto qdo vai dentro da funçao se comporta de forma diferente
 variavel como inteiro, string, float sao as chamadas variavis escalares dentro da funçao e um escopo diferente do externo a funçao
 a variavel [$teste] fora e uma coisa quando entra dentro funçao $variavel e outra variavel tratada somente no escopo interno
 Para a variavel $teste  = 100; entra na funçao mantendo o seu valor e necessario usar o [ & ] function incrementa(&$variavel, $valor)
 passando a variavel como referencia e nao por valor porque se passa como valor ($variavel, $valor) e como se tivesse criado um clone da variavel
 com o & ela mantem o seu valor do contexto externo
 qdo o argumento e um objeto nao e necessário usar o & objeto no php Automaticamente sao passado por referência
*/