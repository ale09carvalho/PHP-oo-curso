<?php
// UNIO TYPES - POSSIBILIDADE DE  UNIAO DE TIPOS
// OO temos as classes - elas tem atributos exemplo (id, dia_semana,sala.. )
// classe e uma estrutura e ela tem seus atributos
// supor que a sala pode receber tanto int como string (private int|string $sala;)
// dentro da classe temos os metodos e funçoes que modificam o comportamento interno do objeto
// metodo para trocar o numero da sala


declare(strict_types=1);

class Turma
{
    // Atributos
    private int $id;
    private int $dia_semana;
    private int|string $sala;

    public function setNumeroSala (int|string $sala)
    {
        // jogar o valor recebido 
        $this->sala = $sala;
    }
}

// cria objeto
$t = new Turma;
$t->setNumeroSala(5); //cria uma turma e passa o numero dela como
// $t->setNumeroSala('5xxx'); // string
// $t->setNumeroSala(true); // valor booleano
// $t->setNumeroSala(['as']); // array