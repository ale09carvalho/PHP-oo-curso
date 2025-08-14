<?php
/*
*CONVERSAO ENTRE OBJETO E ARRAYs
*/
$produto = [];
$produto['descricao'] = 'Chocolate';
$produto['estoque'] = 100;
$produto['preco'] = 7;

// criar um objeto
$objeto = new stdClass;

/*
//pegando o vetor produto[] e convertendo para o formado de $objeto
// o que seria posiçoes do vetor vai virar atributos do objeto
$objeto = (object) $produto;
*/

// fazendo de uma maneira diferente - criando um objeto vazio  e vai pecorrer o vetor produto
// cada vez que pecorrer pega as 2 informaçoes como ex. Chave => $valor
// vai pecorrer 3 vezes, e cada vez vai alimentar o atributo do objeto
foreach ($produto as $chave => $valor)
{
    $objeto ->$chave = $valor;
}

echo'<pre>';
// exibir o objeto criado
print_r($objeto);

/*
Resultado: virou um objeto da classe stdclass - com atributo descricao - Estoque e preço
objeto com 3 atributos
stdClass Object
(
    [descricao] => Chocolate
    [estoque] => 100
    [preco] => 7
)

*/

