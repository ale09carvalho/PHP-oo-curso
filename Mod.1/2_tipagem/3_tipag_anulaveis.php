<?php
// Tipos Anuláveis - passagem de parametros que pode passar nulas
// passar null nao e uma exceção
// tipagem strita - mesmo tipo

declare(strict_types=1); 

/*
// funçao que passar string e retornar string
function create_link(string $action, string $label): string 
{
    return "<a href='$action'>$label</a>";
}

print create_link('delete.php', 'Excluir');
*/


/*
// funçao que passar string e retornar null
function create_link(string $action, ?string $label): string 
{
    $label = $label ?? 'Clique aqui';
    print '<br>';
    return "<a href='$action'>$label</a>";
}
print create_link('delete.php', null);
print create_link('delete.php', 'Excluir');
*/

/*
function create_link(string $action, string $label=null): string 
{
    $label = $label ?? 'Clique aqui';
    print '<br>';
    return "<a href='$action'>$label</a>";
}
print create_link('delete.php');
*/




/*
function create_link(string $action, string $label): string 
{
    $label = $label ?? 'Clique aqui';
    print '<br>';
    return "<a href='$action'>$label</a>";
}

print create_link('delete.php', 'Excluir');

*/
