<?php

class Pessoa
{
    private $nome;

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
* Warning: Undefined property: Funcionario::$nome in 
* nao tem o atributo nome, pois ele é privado na classe Pessoa.
* Nome: , Salário: 1600 
* deu um nome vazeio e o salário foi atribuído corretamente.
* nome esta definido como private na classe Pessoa,
* portanto não pode ser acessado diretamente na classe Funcionario.
* private e acessado apenas dentro da propria classe.'
* no caso apresentado esta tentando acessar por meio de uma classe filha.
* para acessar a partir de um classe filha, tem que definir o atributo como protected.
*/