<?php
require_once 'classes/Conta.php';
require_once 'classes/ContaCorrente.php';
require_once 'classes/ContaPoupanca.php';

// criar o objeto da classe ContaPoupanca
// ContaPoupanca nao tem metodo construtor vai executar da classe pai
//  __construct( $agencia, $conta, $saldo )
$p = new ContaPoupanca ( '100', '12300', 500.00 );
// retorna o saldo atual - metodo escrito na classe conta pai
echo $p->getSaldo() . '<br>'; 

// executar operaçao depositar - metodo escrito na classe conta pai
$p->depositar(200);
echo $p->getSaldo() . '<br>';

// executar operaçao retirar - metodo q esta na propria classe ContaPoupança
$p->retirar(100);
echo $p->getSaldo() . '<br>';


/*
echo '<pre>';
var_dump($p);
echo '</pre>';
*/