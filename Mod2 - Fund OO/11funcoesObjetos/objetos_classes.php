<?php
class Funcionario
{
    public $nome;
    public $salario;
    public $departamento;
}
class Estagiario extends Funcionario
{
    public $bolsa;
}

$jose = new Funcionario;
$joao = new Estagiario;

// get_class — Retorna o nome da classe de um objeto
// Obtém o nome da classe do dado object.
print get_class( $jose) . '<br>'; // jose e da classe Funcionario 
print get_class( $joao) . '<br>'; // joao e da classe Estagiario

// Funçao 
// get_parent_class()  — Recupera o nome da classe pai para objeto ou classe
// retorna o pai da classe de Joao q e Funcionario
print get_parent_class( $joao) . '<br>';

// Essa funçao ela pode receber como paramentro um objeto ou uma classe
print get_parent_class ( 'Estagiario') . '<br>';// retorna o nome da classe Pai de Estagiario

// is_subclass_of — Verifica se o objeto tem esta classe como um de seus pais ou a implementa
var_dump(is_subclass_of ($joao, 'Funcionario')); // bool(true)

// is_subclass_of — Verifica se a classe Estagiario esta classe como um de seus pais ou a implementa
var_dump(is_subclass_of ('Estagiario', 'Funcionario')); // bool(true)
