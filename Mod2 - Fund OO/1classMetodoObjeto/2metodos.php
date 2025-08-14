<?php
// Acrescentar alguns metodos  na classe
/*
A ideia dos metodos e oferecer funcionalidades
Quais funçoes esta classe vai oferecer para que utilizar:
Oferece uma forma de modificar os atributos de uma forma segura;
 - O metodo começa com a palavra --> public function
 - modificar o atributo $estoque

 Qual a vantagem de criar um metodo: dentro do metodo pode fazer algumas validaçoes
 para verifica se o que o usuario passou e válido, caso contrario o usuario poderia passar uma string
 que nao varia sentido

*/
class Produto
{
    //ATRIBUTOS
    public $descricao;
    public $estoque;
    public $preco;

    // metodos  aumentar e diminuir estoque
    public function aumentarEstoque($unidades)
    {
        if (is_numeric($unidades) and $unidades >= 0)
        {
            // $this->estoque forma de acessar o atributo estoque da classe
            $this->estoque += $unidades;
        }
    }

    public function diminuirEstoque($unidades)
    {
        if (is_numeric($unidades) and $unidades >= 0)
        {
            // $this->estoque forma de acessar o atributo estoque da classe
            $this->estoque -= $unidades;
        }
    }

    // metodos  para reajustar o preço($percentual)
    public function reajustarPreco($percentual)
    {
        if (is_numeric($percentual) and $percentual >= 0 )
        {
            // ex rejuste perc 50 -- 50/100 = 0.5 + 1 = 1.5 --> o valor * 1.5
            $this ->preco *= (1 + ($percentual/100));
        }

    }

}
// Criar os objetos 
$p1 = new Produto;
// definir os atributos:
$p1 ->descricao =  'Chocolate';
$p1 ->estoque =  10;
$p1 ->preco =  8;

//echo '<pre>';
//var_dump($p1);
//echo '</pre>';

// modificar o estoque So Produto criando um metodo aumentarEstoque
// chamar os metodos 

echo "O estoque de {$p1->descricao} é {$p1->estoque} <br>";
echo "O preço de {$p1->descricao} é {$p1->preco} <br>";

$p1 ->aumentarEstoque(10);
$p1 ->diminuirEstoque(5);
$p1 ->reajustarPreco(50);

//echo '<pre>';
//var_dump($p1);
//echo '</pre>';

echo "O estoque de {$p1->descricao} é {$p1->estoque} <br>";
echo "O preço de {$p1->descricao} é {$p1->preco} <br>";



/* 
RESULTADO 1

object(Produto)#1 (3) {
  ["descricao"]=>
  string(9) "Chocolate"
  ["estoque"]=>
  int(10)
  ["preco"]=>
  int(8)
}
object(Produto)#1 (3) {
  ["descricao"]=>
  string(9) "Chocolate"
  ["estoque"]=>
  int(15)
  ["preco"]=>
  float(12)
}

RESULTADO 2
O estoque de Chocolate é 10
O preço de Chocolate é 8
O estoque de Chocolate é 15
O preço de Chocolate é 12


*/
