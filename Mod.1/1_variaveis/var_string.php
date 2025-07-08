<?php

$nome = 'Alessandra';
$sobrenome = 'Carvalho';


// 1. FORMA Exiber conteúdo
//print $nome;
 

// 2.FORMA concatenar as 2 variaveis utilizando o ponto (.)
// print $nome . ' ' . $sobrenome;

// 3 . FORMA
// $nome_completo = $nome . ' ' . $sobrenome;
// print $nome_completo;

// 4 FORMA
// outra maneiro de juntar variaveis --- todo o conteudo que esta entre aspas duplas ele e interpretado
// vai verificar o conteudo de $nome e conteudo de $sobrenome
//$nome_completo = "$nome  $sobrenome";
// $nome_completo;


// 5 FORMA.
// melhor maneira e colocar entre chaves {$nome} {$sobrenome}
//$nome_completo = "{$nome}  {$sobrenome}x"; // encapsula a variavel entre chave
//print $nome_completo;


// 6 FORMA.
// aspas simples dentro de aspas dupla ou aspas dupla dentro de aspas simples
//print " Pablo Dall 'Oglio ";
//print ' Pablo Dall "Oglio ';

// 7 FORMA.
// observação nao utilizar mesma aspas exemplo.  print "{$nome}  " {$sobrenome}";
//print "{$nome}  {$sobrenome}";
//print "{$nome}  '{$sobrenome}";


// 8 FORMA.
// Pode colocar uma barra quando utilizar as mesmas apas abrir e fechar
// ele nao vai considerar que aspas duplas seja fechamento da string mas um caracter no meio
print "{$nome} \"{$sobrenome}";

