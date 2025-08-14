<?php
/*

-- CONSTRUTORES E DESTRUTORES

*/
class Produto
{
    //ATRIBUTOS
    private $descricao;
    private $estoque;
    private $preco;

    // METODO CONSTRUTOR - usado par adefinir comportamento inicial de um objeto.
    // vai passar os valores inicial dos atributos Ex:
    public function __construct($descricao, $estoque, $preco)
    {
        // ja vai inicializar com esses valores
        $this ->setDescricao($descricao);
        $this ->setEstoque($estoque);
        $this ->setPreco($preco);
    } 

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
    // METODO DESTRUTOR OU FINALIZADOR  - executado automaticamente qdo objeto deslocado da memeria
    public function __destruct()
    {
        echo "DESTRUÍDO: Objeto {$this ->getDescricao()}<br>";
    }

}
// Criar os objetos new - momento da Construçao do objetos ja definir os valores inicial
$p1 = new Produto('Chocolate', 10, 8);
$p2 = new Produto('Cafe', 5, 10);
 
// AGORA NAO PODE MAIS ACESSAR A VARIAVEL DIRETAMENTE $p1->descricao ---> $p1->getDescricao
echo "O estoque de {$p1->getDescricao() } é {$p1->getEstoque()} <br>";
echo "O preço de   {$p1->getDescricao() } é {$p1->getPreco()} <br>";
/*
O estoque de Chocolate é 10
O preço de Chocolate é 8
DESTRUÍDO: Objeto Cafe
DESTRUÍDO: Objeto Chocolate
*/

// desaloca 1º Chocolate e depois cafe forçou isso
unset ($p1);
unset ($p2);
/*
Ex. dentro de um laço de repeticao cria muitos objetos e deseja aliviar memoria antes script terminar executar
pode usar o um - UNSET - desaloca e libera espaço na memoria - 
DESTRUÍDO: Objeto Chocolate
DESTRUÍDO: Objeto Cafe
*/



