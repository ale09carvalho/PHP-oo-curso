<?php
/*
tem um metodo de mesmo nome, mas com comportamentos diferentes;
classe com polimorfismo
*/
class ContaCorrente extends Conta
{
    protected $limite;


    //metodo construtor(sobrescrito) inicializa a variavel $limite
    public function __construct( $agencia, $conta, $saldo, $limite)
    {
        // chamada do metodo cosntrutor da classe-pai com o comando [parent::__construct]
        // passando como parametros as variaveis 
        parent::__construct ($agencia, $conta, $saldo );
        // gravando o atributo $limite
        $this->limite = $limite;
    }
    
    // metodo retirar
    /**
     * Retira uma quantia da conta corrente, considerando o saldo e o limite disponível.
     *
     * Regra de negócio:
     * - Permite a retirada se a soma do saldo atual com o limite for maior ou igual à quantia solicitada.
     * - Caso permitido, diminui o saldo pela quantia informada.
     * - Caso contrário, a operação não é realizada.
     * @param float $quantia Valor a ser retirado da conta.
     * @return bool Retorna true se a retirada for realizada com sucesso, ou false caso contrário.
     */
    public function retirar($quantia)
    {
        // se o saldo da conta + o limite for maior que  $quantia
        if (($this->saldo + $this->limite) >= $quantia) {
            // permitido retirar
            $this->saldo -= $quantia; // diminui do saldo a quantia informada
        } else {
            // caso contrario nao e possivel executar a operaçao
            return false;
        }
        return true;
    }
    // A classe ContaCorrente herda os métodos e atributos da classe Conta
    // e implementa o método retirar com uma lógica específica para contas correntes.       
}