<?php
/*
Abstraçao: 
* Conceito classes abstradas , classes finais, metodos abstratos e metodos finais.
* Classes abstratas: sao classes que nao podem ser instanciadas, ou seja, nao podem ser criados objetos a partir delas.
* mecanismo para impedir que uma classe seja instanciada, mas pode ser herdada por outras classes.
* abstract class Conta --> serve como um modelo para as classes filhas, que devem implementar os metodos abstratos definidos na classe pai.

* A classe conta e uma classe imcompleta, que serve como modelo para as classes filhas ContaCorrente e ContaPoupanca.
* não pode ser possivel criar um objeto da classe Conta, pois ela é abstrata.
*/

abstract class Conta
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
    // metodo para retornar  da Conta - usada para debug
    public function getInfo()
    {
        return "Agencia {$this->agencia}, Conta {$this->conta}";
    }

    // metodo abstrato - deve ser implementado pelas classes filhas
    // forçar as classes filhas a implementarem esse metodo
    abstract public function retirar($quantia); // ele e so uma assinatura, sem corpo uma obrigatoriedade 
    // as classes filhas devem implementar esse metodo com a logica especifica de cada tipo de conta
        
}