<?php
/*
Funçoes anonimas 
Uma funçao geralmente tem um nome - a açao que ela executa  e algo global consegue chamar a função de qualquer lugar do sistema
Existe um tipo de funçao que sao as funçoes anonimas - tbm chamada de lambida function - nao tem nome - e para usa-la
guarda em uma variavel que pode ser temporaria ou passar a variavel adiante via parametros

Criar uma função e guarda-la em uma variavel - chamar remove_acento
a funçao qdo nao tem nome  depois palavra function ja vem os parametros de entrada abre { } e dentro da funçao
a funçao nao tem nome ela vai ficar dentro de uma variavel  $remove_acento = function(#str){ } - vai poder executar
a variavel 
str paramentro de entrada -  vai receber uma string - fazer uma replace de cada caracter com acento para seus pares caracter sem acento
dentro da string e retornar 

geralmente a funçao nao precisa de ; no final mas como a funçao anonima recebe por meio de variavel deve haver ; 
termina com ; pq e uma atribuiçao a uma variavel.

tem- uma função que so existe se tiver acesso a variavel $remove_acento.
Sempre que se quer executar essa funçao tem que passar a variavel como paramentro;


*/
$remove_acento = function($str){
    return str_replace( ['á', 'é', 'í', 'ó', 'ú'], 
                        ['a','e','i', 'o', 'u'], $str );

};

//executar
var_dump($remove_acento('bábébíbóbú'));// string(10) "babebibobu"
// funçao anonima nao tem um nome e utilizada em um contexto especifico - ela nao e global
// pode ser definida a qualquer instante - e armazenada em uma variavel sempre q desejar usa-la em outro contexto
// pode passa como parametro