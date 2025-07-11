<?php
/*


Variavel super global e uma variavel que esta disponivel em qualquer escopo, em qualquer arquivo a qualquer momento
tera acesso a ela.
algumas sao variaveis de ambiente e alguamas contem dados por exemplo do POST ou URL da requisiçao

SUPER-GLOBAIS DO PHP  mais utilizada

-------> $_SERVER : E um array que contem algumas informaçoes sobre o ambiente
que pode ser utilizada dentro da aplicaçao seja para log para registro identificar navegador dominio ...

variavel muito util por exemplo: ela tem infomraçoes interessantes
["HTTP_HOST"]=> string(9) "localhost" -- host do dominio onde esta enviando os dados;
["HTTP_USER_AGENT"]=> --- informaçoes do navegador 
string(111) "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36"
["SERVER_SIGNATURE"]=> inf. servidor de pagina que ta rodando --   string(94) "
Apache/2.4.58 (Win64) OpenSSL/3.1.3 PHP/8.2.12 Server at localhost Port 80
["SERVER_SOFTWARE"]=> string(46) "Apache/2.4.58 (Win64) OpenSSL/3.1.3 PHP/8.2.12"
["CONTEXT_DOCUMENT_ROOT"]=>   string(15) "C:/xampp/htdocs" -- pasta raiz que o servidor de pagina ta rodando.
["REQUEST_URI"]=>   string(49) "/php_oo_patterns/variaveisGlobais/superglobal.php" -- o arquivo que foi requisitado na url

-------> $_GET
// array(0) { } Vazio pq contem as variaveis passada na URL EX:
por ex: na URL colocar os seguingtes parametros:
http://localhost/php_oo_patterns/variaveisGlobais/superglobal.php?codigo=&nome=maria
ele tem as variaveis os argumentos da URL
resultado
array(2) {
  ["codigo"]=>
  string(0) ""
  ["nome"]=>
  string(5) "maria"
}
a superglobal $_GET vai estar disponivel sempre em qualquer escopo em qq contexto dentro programa que contem as variaveis passada como paramentros na URL

-------> $_POST
Contem as variaveis enviada via POST para o programa em questao PAGINA geralmente vem de um formulario

-------> $_FILES
Contem Conteudo de arquivos uploads
Temos COOKIES SESIONS

-------> $_REQUEST
Junta alguns conteudo de entrada como GET e POST ela te dar acesso a todos eles
Ela junta uma serie de paramentros de entrada como aquilo que envia via GET e POST
Tambem acesso avariavis de SESSION etc.

*/
//----------------------
//echo '<pre>';
//var_dump($_SERVER);
//echo '</pre>';
//--------------------

//echo '<pre>';
//var_dump($_GET);
//echo '</pre>';
// array(0) { } Vazio pq contem as variaveis passada na URL EX: 

//echo '<pre>';
//var_dump($_POST);
//echo '</pre>';

/*
http://localhost/php_oo_patterns/variaveisGlobais/form.html

http://localhost/php_oo_patterns/variaveisGlobais/superglobal.php
array(2) {
  ["codigo"]=>
  string(2) "10"
  ["nome"]=>
  string(5) "Maria"
}
*/

echo '<pre>';
var_dump($_REQUEST);
echo '</pre>';

/* 
array(2) {
  ["codigo"]=>
  string(1) "5"
  ["nome"]=>
  string(4) "Joao"
}
/*