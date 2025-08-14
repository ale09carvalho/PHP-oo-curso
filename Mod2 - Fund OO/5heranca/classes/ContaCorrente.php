<?php
/*
Ao estender uma classe, a subclasse herda todos os métodos públicos e protegidos, 
propriedades e constantes da classe pai.
*/
class ContaCorrente extends Conta
{
    protected $limite;


    //metodo construtor(sobrescrito) inicializa a variavel $limite
    public function __construct( $agencia, $conta, $saldo, $limite)
    {
        // chamada do metodo cosntrutor da classe-pai com o comando [parent::__construct]
        // passando como parametros as variaveis 
        parent::__construct ($agencia, $conta, $saldo);
        // gravando o atributo $limite
        $this->limite = $limite;
    }

    // metodo retirar
    public function retirar($quantia)
    {
        // regra de negocio: se o limite e permitivel retirar
        // se o saldo da conta + o limite for maior que  $quantia
        if (($this->saldo + $this->limite) >= $quantia) {
            // permitido retirar
            $this->saldo -= $quantia; // diminui do saldo a quantia informada
        }
        else {
            // caso contrario nao e possivel executar a operaçao
            return false;
        }
        return true;
    }

}