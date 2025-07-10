<?php
/*
// switch case -  estrutura de controle para fazer uma bateria de ifs
$tipo = 'pdf';

switch ($tipo)
{
    case 'pdf': // se pdf executa bloco de codigo
        print 'arquivo PDF';

        break; // cada bloco de codigo termina com um break
    case 'doc': // se escolher doc executa outro bloco de codigo
        print 'arquivo documento de texto';

        break;
    default: //  clausula defaut significa se escolher algo que nao foi testado pelos cases
        print 'arquivo default';
}
*/

// por opçao de IF ELSE

$tipo = 'doc';

if ($tipo == 'pdf')
{
    print 'arquivo PDF';
}
elseif ($tipo == 'doc')
{
    print 'arquivo documento de texto';
}
else
{
    print 'arquivo default';
}