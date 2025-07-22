<?php
/* extends Conta - a class ContaPoupanca e filha da classe Conta
// Polimorfismo - php é a capacidade que uma classe tem de sobrepor métodos da classe abstrata, modificando-os. 
// Para tanto, é necessário que ela possua a mesma assinatura de método.
*/
class ContaPoupanca extends Conta
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
// A classe ContaPoupanca herda os métodos e atributos da classe Conta
// e implementa o método retirar com uma lógica específica para contas poupança.