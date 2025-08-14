<?php
require_once 'classes/Preferencias.php';

# verifica se vai funcionar o bloqueio dar um new
# nao pode dar new na classe pois bloqueou o metodo construtor marcado como private 
# teria que ser como publica para o acesso
# new Preferencias; // resultado atal error: Uncaught Error: Call to private Preferencias::__construct() from global scope


# objeto de preferencias
/* vai verificar se esta vazia a self = $instance - vai criar um obj novo
*/
/*
$p1 = Preferencias::getInstance();
$p2 = Preferencias::getInstance();
echo '<pre>';
var_dump($p1);
var_dump($p2);
*/ 
//objeto $p1 = Preferencias::getInstance(); e um objeto Global
// Objeto $p1 e $p2 sao o mesmo objeto - o q alterar numa parte vai esta visivel na outra
//-- Esses metodos podem esta sendo chamado numa parte do progrma 
$p1 = Preferencias::getInstance();
print 'A linguagem é: ' . $p1->getData('language');
print '<br>';
# trocar a propriedade para pt -alterar
$p1->setData('language', 'pt');

// ---Esse em outra parte do programa -------------
$p2 = Preferencias::getInstance();
print 'A linguagem é: ' . $p2->getData('language');
print '<br>';