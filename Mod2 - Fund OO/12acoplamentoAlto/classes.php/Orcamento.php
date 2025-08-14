<?php
/*
Classe composta inicialmente por produtos
*/

class Orcamento
{
    # Atributos
    private $itens;

    # metodo aciona produto - arg tem q ser objeto Classe Produto
    # este metodo esta fortemente acoplada a classe Produto
    public function adiciona(Produto $produto, $qtde)
    {
        # adcionar no vetor de itens lista de qtde e produto
        $this->itens[] = [$qtde, $produto];
    }

    # metodo calculaTotal - vai pecorrer os itens e retornar o valor total 
    public function calculaTotal()
    {
        # inicializa variavel com 0
        $total = 0;
        # pecorre os itens
        foreach ($this->itens as $item)
        {
            # variavel total soma-se - metodo getPreco
            $total += ($item[0] * $item[1]->getPreco());
        }
        # retorn resultado
        return $total;
    }

}