<?php
/*
Funçoes de manipulaçao de arquivos e diretorios
-> foper - abre um arquivo  fopen — Abre um arquivo ou URL
-> passa args camino de um arquivo - '/Mod.1/9_arquivoDiretorios/teste.txt'
-> 'r' - modo como quer abrir o arquivo 'r' leitura e 'w' escrita
-> retorno da funçao e uma variavel indicaro ponteiro para o arquivo enquanto esta aberto
-- constuma chamar a variavel de $handler
arquivo aberto pela fopen - pecorrer o arquivo  fazer a leitura e depois fechar o arquivo
caso o arquivo e muito grande e interesante fazer a leitura aos poucos a funçcao fgets var $handler e nº de linhas
4096 que e 4k
--> retorna uma linha lida do arquivo print fgets($handler, 4096);
*/


// realizando abertura e leitura de um arquivo 
$handler = $fopen('teste.txt', 'r');
// por meio while faz a leitura de todas as linhas do arquivo
while ( !feof($handler))
{
    print fgets($handler, 4096);
    print '<br>';

}
fclose($handler);


