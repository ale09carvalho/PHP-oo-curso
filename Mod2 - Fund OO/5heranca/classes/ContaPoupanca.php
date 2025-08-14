<?php
/*
Ao estender uma classe, a subclasse herda todos os métodos públicos e protegidos, 
propriedades e constantes da classe pai.
*/
// extends Conta - a class ContaPoupanca e filha da classe Conta
// vai herdar os metodos e os atributos 
class ContaPoupanca extends Conta
{
    public function  retirar($quantia)
{
    if ($quantia > 0)
    {
        $this->saldo -= $quantia;
    }
    else
    {
        return false;
    }
    return true;
}

}