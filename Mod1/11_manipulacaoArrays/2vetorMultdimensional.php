<?php
// Vetor multidimensional - vetor tem um indice e outro vetor interno

$carros = ['Palio' => ['cor'=> 'azul',
                      'marca'=> 'fiat',
                      'ano' => '2002'],
          'Corsa' => ['cor' =>'prata',
                      'marca'=> 'GM',
                      'ano' => 2003 ]
];
// vetor de 2 dimensao 1 dimensao tem um indice(palio) e a 2 dimensao tem outro indice(Corsa)

// print $carros ['palio']['cor'];

// 1º nivel tem Modelo[1ºvetor - PALIO E CORSOA] dentro tenho as informaçoes[outro vetor as informaçoes]
foreach ($carros as $modelo => $informacoes)
{
    print "<b>$modelo</b><br>"; //negrito o nome modelo
    // pecorrer o outro vetor $informaçoes 2 nivel do vetor
    foreach ($informacoes as $atributo => $valor) //$atributo cor/marca/ano.. e o valor que e o conteudo 
    {
        print "$atributo: $valor <br>";
    }
}

/*
RESULTADO:
Palio
cor: azul
marca: fiat
ano: 2002
Corsa
cor: prata
marca: GM
ano: 2003
*/