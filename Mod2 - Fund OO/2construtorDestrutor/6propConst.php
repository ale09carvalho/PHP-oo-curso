<?php
/*
Promoção de propriedades no construtor 
A partir do PHP 8, parâmetros de construtores podem ser promovidos a uma propriedade do objeto.
Promoção de construtor fornece uma sintaxe reduzida para esse caso 
*/
class Produto
{
    //ATRIBUTOS
    private string $descricao;
    private float $estoque;
    private float $preco;

    // METODO que recebe variaveis 
    public function __construct(string $descricao, float $estoque, float $preco) {
        //armazena var em atributos
        $this ->descricao = $descricao;
        $this ->estoque = $estoque;
        $this ->preco = $preco;
    } 
    // metodo para retornar descricao
    public function getDescricao() {
        return $this->descricao;
    }
    // metodo para retornar estoque
    public function getEstoque() {
        return $this->estoque;
    }
    // metodo para retornar preco
    public function getPreco() {
        return $this->preco;
    }
}
// Criar os objetos new 
$p1 = new Produto('Chocolate', 10, 8);
print 'Descricao: ' . $p1->getDescricao() . '<br>'.PHP_EOL;
print 'Estoque: ' . $p1->getEstoque() . '<br>'.PHP_EOL;
print 'Preço: ' . $p1->getPreco() . '<br>'.PHP_EOL;

