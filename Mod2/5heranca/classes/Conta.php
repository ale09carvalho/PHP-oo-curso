<?php
/*
* HERANÇA - PHP
* Public: todos tem acesso a este atributo
* Private: acessado somente de dentro da classe, p/ usar tem q ter metodos para manipular esse atributo
* Protected: atributo  pode ser utilizado dentro das classes e dentro das classes filhas;

* Sempre que se trabalhar com hierarquia de classe -  como neste exemplo classe pai - topo da hierarquia
* disponibilizar os atributos para que classes filhas possa acessar e necessario defini como protected

* Os métodos privados de uma classe pai não são acessíveis a uma classe filha.

*/

class Conta
{
    // atributos
    protected $agencia;
    protected $conta;
    protected $saldo;


    // metodo construtor que vai receber como parâmetros $agencia, $conta, $saldo inicial
    // inicializar uma conta criar um objeto com esses atributos
    public function __construct( $agencia, $conta, $saldo )
    {
        // gravar as informaçoes dentro dos atributos
        $this->agencia = $agencia;
        $this->conta = $conta;
        // somente o saldo se for maior que 0
        // verificar se o saldo passado como parametro e positivo para inicializar a conta
        if ($saldo > 0){
            $this->saldo = $saldo;// gravar no atributo $saldo
        }
    }

    // metodo para Depositar na conta
    // aumentar o Saldo em $quantia
    public function depositar ($quantia)
    {
        if ($quantia > 0){
            $this->saldo += $quantia;
        }

    } 
    // metodo retornar o saldo atual
    public function getSaldo()
    {
        return $this->saldo;
    }
        
}