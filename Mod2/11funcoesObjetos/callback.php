<?php
/*
PODE utilizar o call_user_func - para chamar uma funçao em Estrutura OO
PASSAR call_user_func - array com a classe e o metodo --- e o paramentro para a classe e o metodo
ex: call_user_func( [$obj, $metodo], 'Alessandra');
qdo o nome da classe / objeto e dinamico - nao tem como fixar cod fonte e variavel - quero executar algo variavel

*/


function apresenta($nome)
{
    print "Olá $nome";
}

//apresenta('Alessandra'); // Olá Alessandra

$funcao = 'apresenta';

// call_user_func — Chama o retorno de chamada fornecido pelo primeiro parâmetro
// recebe como argumentos a funçao e os argumentos da funçao
call_user_func($funcao, 'Alessandra');

echo '<br>';

class Pessoa
{
    public static function apresenta($nome)
    {
        print "Olá $nome";
    }
}

// chamar a funçao de dentro da classe Pessoa
// Pessoa::apresenta('ALESSANDRA');

// CLASSE E OBJETO
$classe = 'Pessoa';
$metodo = 'apresenta';

// passando uma classe como string
// ARRAY $classe 1º posiçao classe - 2º posiçao e o $metodo e o 3 e o nome argumento da fução
call_user_func( [$classe, $metodo], 'Alessandra');

$obj = new Pessoa;

// passando um objeto 1º posiçao OBJETO - 2º posiçao e o $metodo e o 3 e o nome argumento da fução
call_user_func( [$obj, $metodo], 'Alessandra');