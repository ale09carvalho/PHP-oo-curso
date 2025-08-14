<?php
/*
variavel/atributos do Tipo PRIVATE:
atributo que nao pode ser modificado fora da classe


- Fatal error: Uncaught Error: Cannot access private property Produto::$descricao
- Nao e possivel acessar a varialve $descricao marcada como private fora da classe
- Para gravar um valor nessa propriedade e necessario criar um metodo - alem de definir vai 
- descidir o que e que pode e o que nao pode ser gravado para dentro do atributo

*/
class Produto
{
    //ATRIBUTOS
    private $descricao;
    private $estoque;
    private $preco;
}

// Criar os objetos 
$p1 = new Produto;

// definir os atributos:
$p1 ->descricao =  'Chocolate';
$p1 ->estoque =  10;

