<?php

/*
 CONSTANTE é um identificador (nome) para um valor simples. 
 Como o nome sugere, esse valor não pode mudar durante a execução do script
E visivel no escopo global da aplicaçao de qualquer lugar da aplicaçao vc consegue acessar o conteudo
da chave.

definir uma constante 
__FILE__ -- essa constante te informa o caminho do arquivo que vc esta acessando

__LINE__ -- retorna o numero da linha a qual ela foi executada 

__DIR__ -- mostra o diretorio do arquivo se encontra

** entrar pag php colocar medic constant - constantes magicas aparece alguamas das cosntantes mais utilizadas
no entanto algumas so fazem sentido dentro de classe  OO

*/
define ('LANGUAGE', 'PT_BR'); // CONSTANTET DO USUARIO 

// --- CONSTANTES MAGICAS------
var_dump(LANGUAGE);
// string(5) "PT_BR"

var_dump(__FILE__);
// string(5) "PT_BR" string(56) "C:\xampp\htdocs\php_oo_patterns\constantes\constante.php"

var_dump(__LINE__);
// string(5) "PT_BR" string(56) "C:\xampp\htdocs\php_oo_patterns\constantes\constante.php" int(23)

var_dump(__DIR__);
// "C:\xampp\htdocs\php_oo_patterns\constantes"