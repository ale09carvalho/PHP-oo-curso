<?php
# dizer que esta classe Produto implements a interface - OrcavelInterface
# implements diz que esta classe assina contrato inteface

class Produto implements OrcavelInterface
{
    private $descricao;
    private $estoque;
    private $preco;
    private $fabricante;
    private $caracteristicas;

    //metodo contrutor recebendo 
    public function __construct($descricao, $estoque, $preco)
    {
        $this->descricao = $descricao;
        $this->estoque = $estoque;
        $this->preco = $preco;
        $this->caracteristicas = [];
    }

    public function addCaracteristica( $nome, $valor)
    {
        $this->caracteristicas[] = new Caracteristica( $nome, $valor);
    }

    public function getCaracteristicas()
    {
        return $this->caracteristicas;
    }

    // retornar a descricao do produto
    public function getDescricao()
    {
        return $this->descricao;
    }

    // retornar o estoque do produto
    public function getEstoque()
    {
        return $this->estoque;
    }
    
    // forma de GRAVAR o frabicante dentro do produto - metodo setFabricante receber parametro objeto- $fabricante
    public function setFabricante(Fabricante $fabricante)
    { 
        //gravar objeto dentro do atributo this->
        $this->fabricante = $fabricante;
    }
    
    // forma de RETORNAR o frabicante dentro do produto - metodo getFabricante
    public function getFabricante()
    {
        return $this ->fabricante;
    }
    
    public function getPreco()
    { 
        return $this ->preco;
    }

}
