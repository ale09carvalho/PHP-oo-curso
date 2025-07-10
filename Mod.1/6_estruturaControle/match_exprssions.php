<?php
// match expressions  - teste variavel para retornar determinado valor (testar variavel em bloco)
// forma mais elegante para testar valor de uma variavel
// bloco simplificado para fazer uma bateria de if ou switch case com sintaxe mais curta


//variavel de teste
$codigo = 9;

// resultado pode ser jogado em uma variavel de resultado (status)
$status = match($codigo){
    1=> 'Iniciado',
    2=> 'Em atendimento',
    3=> 'Finalizado',
    default => 'Nao encontrado' // garantir q o cod esta dentro de uma lista de opçoes
};

print $status;


/*
// suporta funçoes

$codigo = 2;

$status = match($codigo){
    1=> 'Iniciado',
    2=> 'Em atendimento',
    3=> 'get_algumacoisa()' // função chama o metodo de uma classe
};

print $status;
*/