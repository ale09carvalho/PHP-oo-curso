<?php
/** encapsulamento: 
* Conceito de encapsulamento, visibilidade e modificadores de acesso.
* O encapsulamento e o processo de esconder os detalhes internos de uma classe, expondo apenas o que e necessario para o uso externo.
* Isso permite que a implementacao interna de uma classe seja alterada sem afetar o codigo que a utiliza.
* Caracteristicas do Public:
* permite acesso a atributos e metodos de dentro do metoso e tbm de fora da classe;
* podendo gravar qualquer dado.
*/

// Criando uma classe Pessoa
// A classe Pessoa tem atributos publicos, o que significa que podem ser acessados de dentro metodo etbm de fora da classe.
class Pessoa
{
    public $nome;
    public $endereco;
    public $nascimento;
}

/*
// acessando os atributos de dentro da classe
public function teste()
{
    $this->nome = "João";
    $this->endereco = "Rua A, 123";
    $this->nascimento = "01/01/2000";
}
*/

// criando objeto
$p1 = new Pessoa;

// acessando os atributos de fora da classe - podendo acessar qualquer dados
$p1->nome = "João da Silva Souza";
$p1->endereco = "Rua A, 123";
$p1->nascimento = "01 de Maio de 2000"; // objeto public aceita qualquer dado, sem restrição

// imprimindo os dados
print_r($p1);
