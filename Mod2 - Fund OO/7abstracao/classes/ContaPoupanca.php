<?php
/* Abstraçao: 
* Conceito classes abstradas , classes finais, metodos abstratos e metodos finais.
* classes final : sao classes que nao podem ser herdadas, ou seja, nao podem ser extendidas por outras classes.
*/

//  final - estamos impedindo de se criar uma classe derivada de ContaPoupanca
final class ContaPoupanca extends Conta
{
    /**
     * Retira uma quantia do saldo da conta poupança.
     * Regra de negócio:
     * - Se a quantia for maior que zero, diminui o saldo pela quantia informada.
     * - Caso contrário, a operação não é executada e retorna false.
     */
    public function  retirar($quantia)
    {
        // regra de negocio: se a quantia for maior que zero
        if ($this->saldo >= $quantia)
        {
            $this->saldo -= $quantia; // diminui do saldo a quantia informada
        } else {
            // caso contrario nao e possivel executar a operaçao
            return false;
        }
        return true;
    }
    
}