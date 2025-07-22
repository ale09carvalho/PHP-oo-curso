<?php
require_once 'classes/Conta.php';
// nova classe filha de Conta
// classe ContaSalario herda de Conta
// a classe ContaSalario deve implementar o metodo abstrato retirar da classe Conta.
// se nao implementar, vai dar erro de classe abstrata
// Isso significa que a classe ContaSalario deve fornecer uma implementação concreta para o método retirar;
class ContaSalario extends Conta
{
    // a classe ContaSalario herda os métodos e atributos da classe Conta
    // e implementa o método retirar com uma lógica específica para contas salário.
    function retirar($quantia)
    {
        // mesmo que nao defina nada aqui, a classe ContaSalario deve implementar o metodo retirar
        // se nao implementar, vai dar erro de classe abstrata
    }

}
/*
* Fatal error: Class ContaSalario contains 1 abstract method and must therefore be declared abstract 
* or implement the remaining methods (Conta::retirar) in
* classe ContaSalario deve implementar o metodo abstrato retirar da classe Conta.
* Isso significa que a classe ContaSalario deve fornecer uma implementação concreta para o método retirar;
*/