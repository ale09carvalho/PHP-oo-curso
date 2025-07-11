<?php

// função
// passa parametros como:
// $saudacao -- Ola 
// $nome -- maria
// $sobrenome -- da Silva
// $tratamento -- pronome de tratamento - coloca o pronome de tratamento na frente

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

//print monta_saudacao('Olá', 'Maria' , 'da Silva' , 'Sra');


// agora passando so os obrigatorios
// print monta_saudacao('Boa Tarde', 'Joana');

// agora passando so os obrigatorios
//print monta_saudacao('Boa Noite', 'Pedro', '', 'Sr'); // no posicinal mesmo nao utilizando o parametro anterio e obrigado a passa 

// Com name dir
print monta_saudacao(saudacao:'Bom Dia! ', nome:' Rodrigo', tratamento: 'Sr'); 
