<?php
// ORDENAÇAO DE VETORES

$carros = [];
$carros  [10001] = 'Palio 2002';
$carros  [73933] = 'Corsa 2003';
$carros  [82634] = 'Celta 2005';
$carros  [12838] = 'Uno 1999'; 
// observaçao exemplo --> $carros = [02838] = 'Uno 1999' --> nao permite que inicie com zero entende como um num começa como hexadecimal
//var_dump($carros);
/*
---------------------------------------
Resultado. array posiçao e valor
array(3) 
{ [10001]=> string(8) "Uno 1999" 
  [73933]=> string(10) "Corsa 2003" 
  [82634]=> string(10) "Celta 2005" 
}
-----------------------------------------
*/
//COMO ORDENAR OS VETORES utilizando funçoes
//-----------------------------------------

// funçao  SORT E ASORT 
//sort($carros);
//echo '<pre>';
//var_dump($carros);
/*
----------------------------------
Resultado: a sort ordena mas ela perde os indices foram reconstruido para [0], [1]...
array(4) {
  [0]=>
  string(10) "Celta 2005"
  [1]=>
  string(10) "Corsa 2003"
  [2]=>
  string(10) "Palio 2002"
  [3]=>
  string(8) "Uno 1999"
}
-----------------------------
*/
// funçao  SORT E ASORT 
//asort($carros);
//echo '<pre>';
//var_dump($carros);

/*
----------------------------------
RESULTADO: A funçao asort ordena o vetor ordena pelo conteudo nao e pela chave
array(4) {
  [82634]=> string(10) "Celta 2005"
  [73933]=> string(10) "Corsa 2003"
  [10001]=> string(10) "Palio 2002"
  [12838]=> string(8)  "Uno 1999"
}
----------------------------------
*/
// funçao  kSORT 
//ksort($carros);
//echo '<pre>';
//var_dump($carros);

/*
Resultado - a funçao ksort ordena pela posiçao da chave
array(4) {
  [10001]=> string(10) "Palio 2002"
  [12838]=> string(8) "Uno 1999"
  [73933]=> string(10) "Corsa 2003"
  [82634]=> string(10) "Celta 2005"
}
---------------------------------
*/
// funçao  array_keys() - 
//echo '<pre>';
//var_dump(array_keys($carros));
/*
Resultado: retorna um vetor com as chaves do vetor - somente com o conteudos das chaves
array(4) {
  [0]=> int(10001)
  [1]=> int(12838)
  [2]=> int(73933)
  [3]=> int(82634)
}
*/

// funçao  array_values() - 
//echo '<pre>';
//var_dump(array_values($carros));
/*
---------------------------------
Resultado: retorna array_values retorna o vetor so com conteudo ignorando totalmente as chaves
array(4) {
  [0]=> string(10) "Palio 2002"
  [1]=> string(10) "Corsa 2003"
  [2]=> string(10) "Celta 2005"
  [3]=> string(8) "Uno 1999"
}
---------------------------------
*/

// funçao  caunt() - retorna a contagem quantas posiçoes tem no vetor
//echo '<pre>';
//var_dump(count($carros));
// Resultado: int(4)

// funçao  in_array() - verifica se determinado conteudo esta ou nao no vetor tal: (in_array('conteudo', $vetor));
echo '<pre>';
var_dump(in_array('Uno 1999', $carros));
//bool(true)

