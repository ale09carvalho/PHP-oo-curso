<?php
# a classe Serviço tbm assina a interface

class Servicos implements OrcavelInterface
{
    private $descricao;
    private $preco;

    //metodo contrutor recebendo 
    public function __construct($descricao, $preco)
    {
        $this->descricao = $descricao;
        $this->preco = $preco;
    }
    // retornar a descricao do produto
    public function getDescricao()
    {
        return $this->descricao;
    }
    // retornar o preco
    public function getPreco()
    { 
        return $this ->preco;
    }

}
