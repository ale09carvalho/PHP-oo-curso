<?php
/*
OBJETOS: Funçoes uteis para manipulaçao de objetos.
Algumas funçoes permite q se investigue como determinado objeto esta definido, quais sao os atributos
quais sao suas funçoes;
*/

class Funcionario
{
    // Metodos - objetivo investigar sobre a classe
    function setSalario() {}
    function getSalario() {}
    function setNome() {}
    function getNome() {}
}

// Para saber os metodos que ela oferece
// Obtém os nomes dos métodos da classe
echo '<pre>';
print_r(get_class_methods('Funcionario'));
echo '</pre>';
/*
Array
(
    [0] => setSalario
    [1] => getSalario
    [2] => setNome
    [3] => getNome
)
*/