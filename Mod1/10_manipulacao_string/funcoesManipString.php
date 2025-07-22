<?php

$nome = 'Maria';
$sobrenome = ' da Silva';

//convertet string para maiusculo
print strtoupper($nome . $sobrenome); // MARIA DA SILVA
echo '<br>';
//converte para minusculos 
print strtolower ($nome . $sobrenome); // maria da silva
echo '<br>';
// fornece o tamanho de uma string
print strlen ($nome);// 5
echo '<br>';
// pega pedaço de um string -  segundo o pedaço do caracter apartir do 6º pegando 8 caracter
print substr($nome . $sobrenome, 6, 8); // da Silva
echo '<br>';
print substr($nome . $sobrenome, 0, 5);//Maria
echo '<br>';
print substr($nome . $sobrenome, -3); // lva
echo '<br>';
// substituir caracter  ex subst letra a por e
print str_replace('a', 'e', $nome . $sobrenome);//Merie de Silve