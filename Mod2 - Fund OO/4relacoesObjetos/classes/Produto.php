<?php

class Produto
{
    private $descricao;
    private $estoque;
    private $preco;
    private $fabricante;

    //metodo contrutor recebendo 
    public function __construct($descricao, $estoque, $preco)
    {
        $this->descricao = $descricao;
        $this->estoque = $estoque;
        $this->preco = $preco;
    }
    // retornar a descricao do produto
    public function getDescricao()
    {
        return $this->descricao;
    }
    // forma de GRAVAR o frabicante dentro do produto
    //metodo setFabricante receber parametro objeto- $fabricante
    //DICA dentro do paramentro pode colocar o nome Classe Fabricante p/ objeto obrigatoriamente 
    //seja da classe Fabricante - e nao correr risco de passar algo que nao seja objeto da classe fabricante
    //(Fabricante $fabricante) isso chama-se induçao ao tipo ou type hint
    //indusindo que o tipo tem que ser daquela 
    
    public function setFabricante(Fabricante $fabricante)
    { 
        //gravar objeto dentro do atributo this->
        $this->fabricante = $fabricante;

    }
    // forma de RETORNAR o frabicante dentro do produto
    //metodo getFabricante
    public function getFabricante()
    {
        return $this ->fabricante;
    }

}
