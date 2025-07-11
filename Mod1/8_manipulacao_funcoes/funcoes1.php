<?php
// Formas de trabalhar com funçoes no PHP
function calcula_imc(float $peso, float $altura): float // definir o tipo de retorno da funçao
{
    return $peso / ($altura * $altura);
}
// echo calcula_imc(70,1.65);

// Outros recursos - variavel global acessada dentro todo escopo
$total = 0;
function km2milhas($km)
{
    global $total; // passa a ser uma variavel global do escopo da aplicaçao acessa de qualquer ponto da aplicaçao
    $total += $km; // a var global recebe o que ja tem + km - acumulou 
    return $km * 0.6;
}
/*

echo km2milhas(100);
echo km2milhas(100);
echo km2milhas(100);
// supor que cada vez que chamar a funçao se queira acumular em uma variavel o valor que foi passado como parametro
var_dump($total); // 606060int(300) acumulou o km parametro passado de entrada

*/

