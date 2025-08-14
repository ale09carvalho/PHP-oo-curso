<?php

class Pessoa
{
    // atributo protected a classe filha pode acessar
    // mas não pode acessar diretamente de fora da classe
    protected $nome;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }

}

// classe filha de Pessoa
// A classe Funcionario herda os atributos e métodos da classe Pessoa
class Funcionario extends Pessoa
{
    private $cargo, $salario;

    public function contrata($cargo, $salario)
    {
        if (is_numeric($salario) && $salario > 0) {
            $this->cargo = $cargo;
            $this->salario = $salario;
        } else {
            echo "Salário inválido.";
        }
    }
    public function getInfor()
    {
        return " Nome: {$this->nome}, Salário: {$this->salario}";
    }
}

// criando objeto
$p1 = new Funcionario('Maria da Silva');
$p1->contrata('Auxiliar Administrativo', 1600);
print $p1->getInfor();

/* Resultado esperado:
* Nome: Maria da Silva, Salário: 1600
* A classe Funcionario pode acessar o atributo protected $nome da classe Pessoa,
* pois o atributo foi definido como protected.
* Isso significa que ele pode ser acessado dentro da própria classe Funcionario,
*/