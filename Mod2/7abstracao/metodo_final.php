<?php
/*
Metodo final:
* Conceito classes abstradas , classes finais, metodos abstratos e metodos finais
* Classes finais: sao classes que nao podem ser herdadas, ou seja, nao podem ser extendidas por outras classes.
* Isso significa que a classe ContaPoupanca foi definida como final, o que impede que outras classes a estendam.
* A classe ContaPoupanca e uma classe final, que nao pode ser herdada por outras classes.
* Isso significa que a classe ContaPoupanca foi definida como final, o que impede que outras classes a estendam.
*/

// importar as classes necessárias
require_once 'classes/Conta.php';
require_once 'classes/ContaCorrente.php';

class ContaCorrenteEspecial extends ContaCorrente
{
    // tentar sobrescrever o metodo retirar
    // mas isso nao sera possivel, pois o metodo foi definido como final na classe ContaCorrente
    public function retirar($quantia)
    {
        // implementacao do metodo especifico para ContaCorrenteEspecial
        $this->saldo -= $quantia; // diminui do saldo a quantia informada
        // aqui poderia ter uma logica diferente, mas nao pode sobrescrever o metodo final
    }
}

/* Resultados esperados:
* Fatal error: Cannot override final method ContaCorrente::retirar() in
* Nao pode sobrescrever o metodo retirar da classe ContaCorrente, pois ele foi definido como final.
*/
