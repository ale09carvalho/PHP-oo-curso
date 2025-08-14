<?php

// Testar se determindao metodo existe
class Funcionario
{
    public $nome;
    public $salario;
    public $departamento;
    function setSalario() {}
    function getSalario() {}

}

$jose = new Funcionario;
$metodo = 'teste';

// FUNÇA PHP TESTA SE O METODO EXISTE
// method_exists — Verifica se o método de classe existe

if (method_exists($jose, 'setNome'))
{
    //$jose->$metodo();
    print 'Jose tem o metodo SetNome() <br>';
}
if (method_exists($jose, 'setSalario'))
{
    print 'Jose tem o metodo setSalario() <br>'; // Jose tem o metodo setSalario()
}