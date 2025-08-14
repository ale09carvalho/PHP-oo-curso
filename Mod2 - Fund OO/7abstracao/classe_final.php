<?php
// importar as classes necessárias
require_once 'classes/Conta.php';
require_once 'classes/ContaPoupanca.php';

class ContaPoupancaUniversitaria extends ContaPoupanca
{

}

/*
* Fatal error: Class ContaPoupancaUniversitaria cannot extend final class ContaPoupanca in
*  classe ContaPoupancaUniversitaria nao pode herdar de ContaPoupanca porque ContaPoupanca é uma classe final.
* Isso significa que a classe ContaPoupanca foi definida como final, o que impede que outras classes a estendam.
*/