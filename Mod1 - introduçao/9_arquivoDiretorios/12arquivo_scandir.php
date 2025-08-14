<?php
/*
scandir — Lista arquivos e diretórios dentro do caminho especificado
scandir(string $directory, int $sorting_order = SCANDIR_SORT_ASCENDING, ?resource $context = null): array|false
Retorna um array de arquivos e diretórios dentro de directory.

*/
$arquivos = $scandir('/teste');

foreach ($arquivos as $arquivo)
{
    print $arquivo . '<br>';
}