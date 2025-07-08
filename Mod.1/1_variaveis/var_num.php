<?php
/* 1. FORMA
$a = 5;
$b = 4;

var_dump ($a * $b);
*/


/* 2. FORMA - se uma das variaveis  e do tipo inteiro e a outra e do tipo float o resultado sera do tipo float
$a = 5;
$b = 4.5;
var_dump ($a * $b);
*/

/* 3. FORMA  E caso uma das variaveis e do tipo string
qdo uma das variavel esta como tipo string esta no meio de um calculo o php converte para um numero inteiro
$a = 5;
$b = '4f' ;

var_dump ($a * $b);
*/


/* 4. FORMAvariaveis que podem ser tratada como referências ou como valor
$a = 5;
$b = $a ;

var_dump ($a);
var_dump ($b);
// ==> int(5) int(5)
*/

/* 5 FORMA - PASSAGEM DE DADOS POR VALOR AS 2 VARIAVEIS OCUPA REGIOES DISTINTA DA MEMORIA
$a = 5;
$b = $a ;
$a = 10;

var_dump ($a);
var_dump ($b);
//==> int(10) int(5) ultima vez var b recebeu o valor foi 5
*/

/*  5 FORMA - PASSAGEM DE DADOS POR VALOR AS 2 VARIAVEIS OCUPA REGIOES DISTINTA DA MEMORIA
// APONTA VALORES 
// AGORA VEREMOS PASSAGEM DE DADOS POR REFERENCIA
// Agora vamos fazer COM QUE UMA VARIAVEL ACOMPANHA O VALOR DA OUTRA utiliza & ecomercia
$a = 5;
$b = &$a ; // o $b e uma referência para o $a PASSAGEM POR REFERENCIA E NAO POR VALOR
$a = 10;

var_dump ($a);
var_dump ($b);
// int(10) int(10)
*/

/*
// AGORA VARIAVEIS BOOLEANAS
$peso = 30 ;
$multa = ($peso > 25);
var_dump ($multa);
*/


/*
// FAZENDO UM IF DIRETAMENTE 
$peso = 30 ;
if ($peso > 25) // usando uma expressao logica
    print 'multa';
// ==>exibe a palavra multa
*/


/*
// Propriedades importante do IF considera variavel sem conteudo falso o 0 para o if e considerado como falso
// 0 - 0.0 - ' ' - vetor vazio

$nome = '';
if ($nome)
{
    print 'nome tem conteudo';
}
*/

/*
// Propriedades importante do IF considera variavel com conteudo True
$nome = 'aaaaaaaaaAAAAA';
if ($nome)
{
    print 'nome tem conteudo';
}
// ==> nome tem conteudo
*/


/*
// UTILIZANDO UMA FUNÇAO PHP EMPTY QUE CONSIDERA VAZIAS 
' '
" "
null,
array(),
FALSE,
NULL,
'0',
"0"
0,
0.0
*/ 

/*
$nome = '0';

// funcao empty($nome) so vai entrar se a variavel for vazia
// funcao !empty($nome) somente de a variavel nao for vazia !empty

if (!empty($nome))
{
    print 'nome tem conteudo';
}
*/ 

/*
// ARRAYS 
$lista = ['vermelho', 'verde', 'azul', 'amarelo'];
var_dump($lista);
// ==> array(4) { [0]=> string(8) "vermelho" [1]=> string(5) "verde" [2]=> string(4) "azul" [3]=> string(7) "amarelo" }
*/


/*
// ARRAYS INDEXADO
$lista = ['Cor'=> 'vermelho', 'Peso' => 20];
var_dump($lista);
// ==> array(2) { ["Cor"]=> string(8) "vermelho" ["Peso"]=> int(20) }
*/


/*
// TIPO OBJETO
$pessoa = new stdClass; // new stdClass - tipo vazio
$pessoa ->nome = 'Pedro';
$pessoa ->altura = 1.8;

var_dump($pessoa);
// ==> object(stdClass)#1 (2) { ["nome"]=> string(5) "Pedro" ["altura"]=> float(1.8) }
// exite um objeto object(stdClass)que o atributo nome e Pedro e o atributo altura e 1.8
// tipo opjeto PHP - varios objetos pode ser criado em memoria
// Objeto no PHP e sempre tratado por 
*/


// TIPO OBJETO
$pessoa1 = new stdClass; // new stdClass - tipo vazio
$pessoa1 ->nome = 'Pedro';
$pessoa1 ->altura = 1.8;

$pessoa2 = $pessoa1; // indepedente de usar  & sempre sera uma passagem por referência
// aponta para o mesma regiao na memoria
$pessoa2->nome = 'Joana';


var_dump($pessoa1);
print '<br>';
var_dump($pessoa2);

//==> object(stdClass)#1 (2) { ["nome"]=> string(5) "Joana" ["altura"]=> float(1.8) }
//    object(stdClass)#1 (2) { ["nome"]=> string(5) "Joana" ["altura"]=> float(1.8) }