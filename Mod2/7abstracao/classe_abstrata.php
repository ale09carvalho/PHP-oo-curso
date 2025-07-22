<?php
/*
Abstraçao: Conceitos
* Conceito classes abstradas , classes finais, metodos abstratos e metodos finais.
* Classes abstratas: sao classes que nao podem ser instanciadas, ou seja, nao podem ser criados objetos a partir delas.
* Classes finais: sao classes que nao podem ser herdadas, ou seja, nao podem ser extendidas por outras classes.

*/

require_once 'classes/Conta.php';

// Criar um objeto da classe Conta
// Isso não é possível, pois Conta é uma classe abstrata
$contas [] = new Conta;

/* ERRO
Fatal error: Uncaught Error: Cannot instantiate abstract class Conta
Não e possivel instanciar a classe Conta
*/



