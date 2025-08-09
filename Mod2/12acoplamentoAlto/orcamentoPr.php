<?php
# Criar o orçamento com varios produtos
# importar as classes

require_once 'classes/Orcamento.php';
require_once 'classes/Produto.php';

# criar o objeto orçamento
$orc = new Orcamento;

# Chamar o metodo adiciona - para adcionar produtos 
# 1ºparamentro construtor [descricao, estoque e preco] 2º param [qtde]
$orc->adiciona(new Produto('Maquina de café', 10, 299), 1 );
$orc->adiciona(new Produto('Barbeador elétrico', 10, 170), 1 );
$orc->adiciona(new Produto('Barra de Chocolate', 10, 7), 3);

print $orc->calculaTotal();