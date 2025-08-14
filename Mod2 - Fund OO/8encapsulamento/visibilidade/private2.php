<?php
/* Encapsulamento:
* Private é um modificador de acesso que restringe o acesso a atributos e métodos de uma classe.
* Atributos e métodos declarados como private só podem ser acessados de dentro da própria classe.
* Isso significa que não podem ser acessados diretamente de fora da classe, nem mesmo por classes
*/

class Pessoa
{
    private $nome;
    private $endereco;
    private $nascimento;


    // metodo construtor para inicializar os atributos
    public function __construct($nome, $endereco)
    {
        $this->nome = $nome;
        $this->endereco = $endereco;
    }

    // Métodos públicos para acessar os atributos privados de fora da classe
    // dentro do metodo publico definimo validações ou regras de negocio para permitir ou nao atribuir valor do objeto
    public function setNascimento($nascimento)
    {
        // dentro do escopo da classe - podemos definir o valor do atributo privado $nascimento 
        // validaçao da data de nascimento
        $partes = explode('-', $nascimento);
        if (count($partes) == 3 )
        {
            // checkdate verifica se a data é válida
            if (checkdate($partes[1], $partes[2], $partes[0])) {
                $this->nascimento = $nascimento; // atribui o valor ao atributo privado
                return true; // sucesso na atribuição
            } else {
                echo "Data de nascimento inválida.";
            }

        }
        return false;
        
    }
}

$p1 = new Pessoa('Maria da Silva', 'Rua B, 466') ;
/* resultados esperados:
object(Pessoa)#1 (3) {
  ["nome":"Pessoa":private]=>
  string(14) "Maria da Silva"
  ["endereco":"Pessoa":private]=>
  string(10) "Rua B, 466"
  ["nascimento":"Pessoa":private]=>
  string(10) "1990-05-01"
}
*/
// chama o método publico par permitir o acesso ao atributo privado
$ok1 = $p1->setNascimento('01 de Maio de 2000');// bool(false)
$ok2 = $p1->setNascimento('1990-05-01');// bool(true)


// imprimindo os dados
echo "<pre>";
var_dump($p1);
var_dump($ok1);
var_dump($ok2);
echo "</pre>";


// Resultados esperados: Pessoa Object ( [nome:Pessoa:private] => [endereco:Pessoa:private] => [nascimento:Pessoa:private] => )

