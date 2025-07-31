<?php
/*
* Constantes de Classe:
* É possível definir constantes em cada classe separadamente. A visibilidade padrão de constantes de classe é public.
* Nota: Constantes de classe podem ser redefinidas em classes filhas. A partir do PHP 8.1.0, 
* constantes de classe não podem ser redefinidas numa classe filha se ela for qualificada como final.
*
*/

class Pessoa
{
    private $nome;
    private $genero;
    // Constante dentro da classe - Contante define com nome Maiuscula
    const GENEROS = ['M'=> 'Masculino', 'F'=>'Feminino'];

    // metodo construtor
    public function __construct($nome, $genero)
    {
        $this->nome = $nome;
        $this->genero = $genero;
    }
    // metodo para acessar o nome
    public function getNome()
    {
        return $this->nome;
    }
    // metodo acessar genero vai retornar com base de vetor Genero
    public function getNomeGerero()
    {
        // retornar o vetor de genero indexado - $this->genero
        // self - refere-se a propria classe -> dentro da classe JA FORA utiliza dessa forma PESSOA::GENEROS
        return self::GENEROS[ $this->genero ];
    }

}
// Pode acessar a constante de qualquer ponto programa da seguinte forma Pessoa::...
//print Pessoa::GENEROS['F']; // Feminino

$p1 = new Pessoa('Maria da Silva', 'F');
$p2 = new Pessoa('Carlos Pereira', 'M');

print $p1->getNome() . '<br>';
print $p1->getNomeGerero() . '<br>';

print $p2->getNome() . '<br>';
print $p2->getNomeGerero() . '<br>';

var_dump(Pessoa::GENEROS);