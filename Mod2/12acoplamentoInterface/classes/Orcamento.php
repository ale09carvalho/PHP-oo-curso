<?php
/*
Classe composta inicialmente por produtos
*/

class Orcamento 
{
    # Atributos
    private $itens;

    # este metodo esta agora tem uma OrcavelInterface - contrato
    # qualquer objeto que implementa essa interface pode ser tanto um produto qto um serviço
    public function adiciona(OrcavelInterface $item, $qtde)
    {
        # adcionar no vetor de itens lista de qtde e produto
        $this->itens[] = [$qtde, $item];
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