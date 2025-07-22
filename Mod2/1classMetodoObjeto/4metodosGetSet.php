<?php
/*
variavel/atributos do Tipo PRIVATE:
atributo que nao pode ser modificado fora da classe

Cannot access private property Produto::$descricao in
*/
class Produto
{
    //ATRIBUTOS
    private $descricao;
    private $estoque;
    private $preco;

    // metodo para atribuir descricao
    public function setDescricao($descricao)
    {
        // verificar se o atributo e de um certo tipo - para validar os parametros
        if (is_string($descricao))
        {
            $this->descricao = $descricao;
        }
    }
    // metodo para retornar descricao
    public function getDescricao()
    {
        return $this->descricao;
    }


    // metodo para atribuir estoque - com regra para validar os parametros
    public function setEstoque($estoque)
    {
        if (is_numeric ($estoque) and $estoque>0 )
        {
            $this->estoque = $estoque;
        }
    }
    // metodo para retornar estoque
    public function getEstoque()
    {
        return $this->estoque;
    }

    // metodo para atribuir Preco com regras para validar os parametros
    public function setPreco($preco)
    {
        if (is_numeric ($preco) and $preco>0 )
        {
            $this->preco = $preco;
        }
    }
    // metodo para retornar preco
    public function getPreco()
    {
        return $this->preco;
    }
    
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

// altera os atributos por meio dos metodos
$p1 ->setDescricao('Chocolate');
$p1 ->setEstoque(10);
$p1 ->setPreco(8);

 
// AGORA NAO PODE MAIS ACESSAR A VARIAVEL DIRETAMENTE $p1->descricao ---> $p1->getDescricao
echo "O estoque de {$p1->getDescricao() } é {$p1->getEstoque()} <br>";
echo "O preço de   {$p1->getDescricao() } é {$p1->getPreco()} <br>";

$p1 ->aumentarEstoque(10);
$p1 ->diminuirEstoque(5);
$p1 ->reajustarPreco(50);


echo "O estoque de {$p1->getDescricao()} é {$p1->getEstoque()} <br>";
echo "O preço de {$p1->getDescricao()} é {$p1->getPreco()} <br>";

/*
O estoque de Chocolate é 10
O preço de Chocolate é 8

O estoque de Chocolate é 15
O preço de Chocolate é 12

*/

