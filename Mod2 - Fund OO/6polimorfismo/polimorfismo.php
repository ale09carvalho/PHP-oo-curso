<?php
require_once 'classes/Conta.php';
require_once 'classes/ContaCorrente.php';
require_once 'classes/ContaPoupanca.php';

// criar o objeto da classe ContaCorrente
// ContaCorrente tem metodo construtor que recebe 4 parametros
//  __construct( $agencia, $conta, $saldo, $limite )

$contas = [];
$contas [] = new ContaCorrente ( 1234, 'CC.1234', 100, 500);
$contas [] = new ContaPoupanca ( 1235, 'CP.4566', 100 );


foreach ($contas as $conta)
{
    if ($conta instanceof Conta)
    {
        print $conta->getInfo() . '<br>';
        print "--> Saldo atual: {$conta->getSaldo()} <br>";

        // tentar depositar 200
        $conta->depositar(200);
        print "--> Depósito de 200 <br>";
        print "--> Saldo atual: {$conta->getSaldo()} <br>";

        // tentar retirar 700
        if ($conta->retirar( 700 ))
        {
            print "--> Retirada de 700 (Ok) <br>";
        }else {
            // se nao conseguir retirar 700
            // ContaCorrente tem limite de 500, ContaPoupanca nao tem limite
            // entao nao consegue retirar 700
            // mensagem de erro
            print "--> Saldo insuficiente para retirar 700 <br>";
        }
        print "--> Saldo atual: {$conta->getSaldo()} <br>";  
    }

}
