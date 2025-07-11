<?php
/*
Funçoes anonimas 
Uma funçao geralmente tem um nome - a açao que ela executa  e algo global consegue chamar a função de qualquer lugar do sistema
Existe um tipo de funçao que sao as funçoes anonimas - tbm chamada de lambida function - nao tem nome - e para usa-la
guarda em uma variavel que pode ser temporaria ou passar a variavel adiante via parametros

Criar uma função e guarda-la em uma variavel -
FUNÇAO teste vai receber um palavra - vai retornar strtoupper funçao que converte para maiúsculo a palavra.

*/
$remove_acento = function($str){
    return str_replace( ['á', 'é', 'í', 'ó', 'ú'], 
                        ['a','e','i', 'o', 'u'], $str );

};


// passar como paramentro $funcao aqui dentro e chamada de $funcao
function teste($palavra, $funcao) 
{
    $palavra = $funcao($palavra); // executar dentro - $funcao esta referindo a remove_acento
    return strtoupper($palavra); // converte para maiusculos
}

//var_dump(teste('bábébíbóbú')); // string(15) "BáBéBíBóBú"
//var_dump(teste('bábébíbóbú')); // string(15) "BáBéBíBóBú"
//var_dump(teste('babebibobu')); // string(10) "BABEBIBOBU"  

var_dump(teste('bábébíbóbú', $remove_acento)); // string(10) "BABEBIBOBU"