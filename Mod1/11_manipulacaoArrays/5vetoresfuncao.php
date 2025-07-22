<?php
/*
ORDENAÇAO DE VETORES - IMPLODE e EXPLODE -funçoes contraria uma da 
A funçao explode - extrair parte da data recebe um caracter de sepaçao e a variavel , usa o caracter para fazer uma explosao
e quebra cada vez que ele encontra esse caracter e retorna um vetor com 3 partes sendo ANO MES E DIA
*/
//-----------------------------------------------------------
// funçao explode — Divide uma string com base em outra string
/*
echo '<pre>';
$data = '2013-10-20';

$partes = explode('-', $data);
//print $partes[0];
print $partes[1];
// 2013
// 10
*/
//-------------------------------------------------------------
// funçao implode — Aglutina elementos de um array com uma string
// implode(',', $partes)--> gera uma string pega as posiçao do vetor concatena as partes com o caracter que vc dfinir no implode
$partes = [ '2013', '10', '20' ];

// juntar no formato de uma string
//print implode('-', $partes);
// 2013-10-20

print implode(',', $partes);
// 2013,10,20