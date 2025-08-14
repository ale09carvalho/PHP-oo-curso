<?php
/** encapsulamento: 
* Conceito de encapsulamento, visibilidade e modificadores de acesso.
* O encapsulamento e o processo de esconder os detalhes internos de uma classe, 
* expondo apenas o que e necessario para o uso externo.
*/

// Criando uma classe Pessoa
// A classe Pessoa tem atributos private.
// Isso significa que eles só podem ser acessados de dentro da classe, não podendo ser acessados diretamente de fora.
// Para acessar esses atributos, é necessário criar métodos públicos que permitam a leitura e escrita dos mesmos.

class Pessoa
{
    private $nome;
    private $endereco;
    private $nascimento;
}

// acessando os atributos de fora da classe - podendo acessar qualquer dados
$p1 = new Pessoa;
$p1->nome = "João da Silva Souza";
$p1->endereco = "Rua A, 123";
$p1->nascimento = "01 de Maio de 2000"; // objeto public aceita qualquer dado, sem restrição

// imprimindo os dados
print_r($p1);

/* Resultados esperados:
*Fatal error: Uncaught Error: Cannot access private property Pessoa::$nome in
* nao pode acessar a propriedade privada diretamente de fora da classe.
* Para acessar os atributos privados, é necessário criar métodos públicos na classe Pessoa.
*/