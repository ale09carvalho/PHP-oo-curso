<?php
/*
ler arquivo file
Carrega todo um arquivo em um array.
transforma em um vetor cada posiçao e uma linha

file('teste.txt'); - ler o arquivo joga em um vetor ($arquivo) onde cada
posiçao[$arquivo as $linha] e uma linha

*/

$arquivo = file('teste.txt');
foreach ($arquivo as $linha)
{
    print $linha . '<br>';
}