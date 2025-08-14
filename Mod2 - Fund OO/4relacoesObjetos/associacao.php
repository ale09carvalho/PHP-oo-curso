<?php
/*
Associação: É uma das relações mais comuns entre dois objetos, 
acontece quando um objeto "utiliza" outro, porém, sem que eles dependam um do outro. 
Em outras palavras, é como se eu tivesse duas classes distintas, 
* e fizesse uso de uma delas dentro da outra, ou como parâmetro de outra.
*/
require_once 'classes/Fabricante.php';
require_once 'classes/Produto.php';

//criar os objetos 
$p1 = new Produto('Chocolate', 10, 7);
$f1 = new Fabricante('Fabrica de Chocolate', 'Rua tal...', '93.3823393.333');

// associaçao entre os objetos Produto e Fabricante 
$p1->setFabricante($f1);

// o normal e chamar o metodo em cima do objeto - pecorrer os objetos
$descricao = $p1->getDescricao(); // cria var descriçao para obter o nome do Produto
$nome_fabr = $p1->getFabricante()->getNome(); // cria uma va nome_fabr para obter o nome da fabricante em seguin o nome da Fabricante

print " O Fabricante do produto {$descricao} é {$nome_fabr}";


//print " O Fabricante do produto {$p1->getDescricao()} é {$p1->getFabricante()->getNome()}";
/*
echo '<pre>';
var_dump($p1);
var_dump($f1);
echo '</pre>';
*/

/*
$nome_fabr = $p1->getFabricante()->getNome();
poderia fazer um encadeamento chamando outros metodos e outros atributos sobre ele.
EXEMPLO: encadeamento se determinado metodo retorna um objeto - retorna objeto -- ate o final
$pessoa->getCidade()->getEstado()->getPais()->getNome();

*/