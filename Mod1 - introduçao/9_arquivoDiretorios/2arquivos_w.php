<?php
/*
Funçoes de manipulaçao de arquivos e diretorios
CONCATENAR COM UMA CONSTANTE DO PHP PHP_EOL - endof line e uma constante que varia conforme o Sistema Operacianal
coloca quebra de linha de texto indep sistema operacial
fwrite( $handler, 'linha 1' . PHP_EOL);
fwrite escrever - fwrite — Escrita  em arquivos
1º paramentro - $handler
2º paramentro - conteudo
concatena com - quebra linha const php
*/

// realizando a escrita de um arquivo 

$handler = $fopen('teste2.txt', 'w');
fwrite( $handler, 'linha 1' . PHP_EOL);
fwrite( $handler, 'linha 2' . PHP_EOL);
fwrite( $handler, 'linha 3' . PHP_EOL);
fclose( $handler);
