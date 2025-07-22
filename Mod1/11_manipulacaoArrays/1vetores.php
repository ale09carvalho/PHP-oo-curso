<?php
// VETORES 
//$cores = array('vermelho', 'verde', 'amarelo'); // array(3) { [0]=> string(8) "vermelho" [1]=> string(5) "verde" [2]=> string(7) "amarelo" }
// acessar posiçao
//print($cores[1]);
//var_dump($cores);
//------------------------------------------------------
// COM COLCHETES
//$cores = ['vermelho', 'verde', 'amarelo'];
//var_dump($cores);
//array(3) { [0]=> string(8) "vermelho" [1]=> string(5) "verde" [2]=> string(7) "amarelo" }
//------------------------------------------------------
// DECLARAR COM VAZIO 
/*
$cores = []; // iniciailiza o vetor como vazio 
// acrescenta opçoes no vetor
$cores [] = 'vermelho';
$cores [] = 'verde';
$cores [] = 'amarelo';
*/
//print($cores[2]);// amarelo
//var_dump($cores);
// amareloarray(3) { [0]=> string(8) "vermelho" [1]=> string(5) "verde" [2]=> string(7) "amarelo" }
//-------------------------------------------------------
/*
$cores = []; // iniciailiza o vetor como vazio 
// acrescenta na posiçao vetor associativo informando a posiçao do elemento
$cores [1] = 'vermelho';
$cores [3] = 'verde';
$cores [5] = 'amarelo';

var_dump($cores); // array(3) { [1]=> string(8) "vermelho" [3]=> string(5) "verde" [5]=> string(7) "amarelo" }
print($cores[5]);// amarelo
*/
//----------------------------------------------------------
/*
$pessoa = [];
$pessoa['nome'] = 'Maria';
$pessoa['endereco'] = 'rua tal';
$pessoa['datanascimento'] = '1990-01-01';

//acessar aposiçao
echo $pessoa ['datanascimento']; // 1990-01-01
//var_dump($pessoa); // array(3) { ["nome"]=> string(5) "Maria" ["endereco"]=> string(7) "rua tal" ["datanascimento"]=> string(10) "1990-01-01" }
*/
//----------------------------------------------------------------
// PECORRER O VETOR POR MEIO DO FOREACH - a passagem por meio do foreach e dinamica
$pessoa = [];
$pessoa['nome'] = 'Maria';
$pessoa['endereco'] = 'rua tal';
$pessoa['datanascimento'] = '1990-01-01';
$pessoa['cidade'] = 'Brasilia';
/*
foreach ($pessoa as $informacao)
{
    print $informacao . '<br>'; 
}
// Resultada da informaçao :=> // Maria  rua tal  1990-01-01
*/
//-----------------------------------------------------------------
//caso deseja apontar a chave 
foreach ($pessoa as $chave=> $informacao)
{
    print $chave . ':' . $informacao . '<br>'; // Maria  rua tal  1990-01-01
}
// RESULTADO COM A CHAVE
// nome:Maria
//endereco:rua tal
//datanascimento:1990-01-01
// cidade:Brasilia

