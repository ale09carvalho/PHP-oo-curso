<?php
// A função array_fill- ela preenche um vetor


function calcula_juros_simples( float $valor, float $periodo, float $taxa)
{
    // retornar o valor
    return $valor + $valor * $periodo * ($taxa /100);
}

// Gera um vetor -  e vai preencher pode usar os parametros na ordem (modo classico) 
// $vetor = array_fill(0, 50 , 'teste'); // da posição 0 ate a 50 - teste --> vai gerar 50 teste
// ou, usa o name dir
$vetor = array_fill( start_index: 0, count: 50, value: 'ABC');// Vai gera um vetor
// var_dump($vetor)

// count Nº elementos a serem inseridos
// value Valor ser utilizado para preenchimento
// Valores de retorno Retorna a matriz preenchida

print_r($vetor); // depurrar e mostra na tela

/* Resultado 
Array ( [0] => ABC [1] => ABC [2] => ABC [3] => ABC [4] => ABC [5] => ABC [6] => ABC [7] => ABC
[8] => ABC [9] => ABC [10] => ABC [11] => ABC [12] => ABC [13] => ABC [14] => ABC [15] => ABC 
[16] => ABC [17] => ABC [18] => ABC [19] => ABC [20] => ABC [21] => ABC [22] => ABC 
[23] => ABC [24] => ABC [25] => ABC [26] => ABC [27] => ABC [28] => ABC [29] => ABC 
[30] => ABC [31] => ABC [32] => ABC [33] => ABC [34] => ABC [35] => ABC [36] => ABC 
[37] => ABC [38] => ABC [39] => ABC [40] => ABC [41] => ABC [42] => ABC [43] => ABC 
[44] => ABC [45] => ABC [46] => ABC [47] => ABC [48] => ABC [49] => ABC )
*/