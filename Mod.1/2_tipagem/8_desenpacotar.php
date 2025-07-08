<?php
/*
Dedempacotar argumentos:
Ex: vetor com os seguintes args
$args ['Ola', 'Maria', 'da Silva', 'Sra' ]
- usar esse vetor para passagem de parâmetros para uma funçao

*/

function monta_saudacao( string $saudacao, string $nome, string $sobrenome = '', string $tratamento)
{
    $frase =  '';// frase começa com a saudaçao
    $frase .= $saudacao;
    
    if ($tratamento) // se tem pronome de tratamento concatena
    {
        $frase .= ' ' . $tratamento;
    }
    $frase .= ' ' . $nome;
 
    if ($sobrenome) // se tem sobrenome concatena o sobrenome
    {
        $frase .= ' ' . $sobrenome;
    }
    return $frase;
}

//$args = ['Ola', 'Maria', 'da Silva', 'Sra' ];

//Como era antes - indicando a posiçao, ou
//print monta_saudacao( $args[0], $args[1], $args[2], $args[3] )
// ou usar uma funçao do php chamada de : call_user_func e call_user_func_array
// faz o desdobramento de vetor para parâmentros
//print monta_saudacao(...$args); // essa funçao diz para o php desempacotar o vetor $args ['Ola', 'Maria', 'da Silva', 'Sra' ];


// quando form um vetor 
// wan pec
//$args = ['saudacao' => 'Ola', 'nome' => 'Maria', 'tratamento' => 'Sra' ];
//print monta_saudacao(...$args); // converte para name dir args nomeados

// CHAMADA MISTA/ hibrida começa pelo posicional e terminar com os name dir php permite
print monta_saudacao('Ola', 'Maria', 'da Silva', tratamento:'Dra');