<?php
//include 'quadrado.phpx';
require 'quadrado.php';

/*
Diferença entre include e require:
Ex:
utilizou o [include 'quadrado.phpx';] e errou o nome do arquivo Warning: include(quadrado.phpx): avisa que o arquivo que tentou importar nao existe
e um erro fatal ao executar a funao [Fatal error: Uncaught Error: Call to undefined function quadrado() in ]

Ex:
utiliza o require [ ] - Warning: require(quadrado.phpx) - arquivo nao existe
e um fatal erro no proprio require - Fatal error: Uncaught Error: Failed opening required 'quadrado.phpx'
qdo ele nao encontra o arquivo ele para a execução onde se chama o arquivo ja o include ele nao para a execução ele procede
tenta executar a funçao

include dar não para a execuçao - erro vai parar depois
require ele para a execuçao qdo ja ver que nao encontrou o arquivo

Tem tbm o:  include_once e require_once:
Importa somente 1 uma vez o arquivo - mesmo que caso tenha mais de um lugar no sistema
** so vai executar uma vez mesmo que se tenha chamado em mais de um lugar no sistema
*/


// include e require importa e executa a função de outro arquivo
// Arquivo que vai utilizar a funçao quadrado.php
// caso no encontre no mesmo diretorio [include caminho/'quadrado.php';]

var_dump(quadrado(4));
