<?php
// induçao ao tipo de objeto / object type hint 
/*
declare(strict_types=1);

function create_link(string $action, string $label=null): string
{
    $label = $label ?? 'Clique aqui';
    return "<a href = '$action'>$label</a>";
}

print create_link('delete.php');
*/


//OO temos o conceito de classe - especificar aquela funçao precisa receber algo daquela classe

/*
class Configuracaox
{
}
//na hora de especificar posso dizer que a funçao precisa receber aldo daquela classe (new Configuaçao) UM objeto
function aplica_configuracao(Configuracao $x)// aquele parametro tem que ser daquela classe
{
}

aplica_configuracao(new Configuracaox); // passa um objeto daquela classe na da erro
 */

 // induçao ao tipo objeto em geral
 // conf glabais idiomas, fuso horario ....


function aplica_configuracao( object $configuracoes)
{
    date_default_timezone_set($configuracoes->timezone);
    $_SESSION['language'] = $configuracoes->language; 

    print "Aplicou configuraçoes: {$configuracoes->timezone} e idioma {$configuracoes->language}";
}

$configs = new stdClass;
$configs->timezone = "America/Fortaleza";
$configs->language = "pt_BR";

//aplica_configuracao($configs);
//Para ler do arquivo (config .ini)
//parse_ini_fi ler o arquivo .ini e retorna um array um vetor com as posiçoes
// excelente para guardar arquivo de configuraçao e ler em tempo de execução
// so que ela passa um vetor e se espera um objeto

//aplica_configuracao( parse_ini_file('config.ini'));

// realizar uma conversao incasting de um array para objeto passa a funcionar
// converte o argumento que esta a direita para tipo objeto na esquerda

aplica_configuracao( (object) parse_ini_file('config.ini') ); 