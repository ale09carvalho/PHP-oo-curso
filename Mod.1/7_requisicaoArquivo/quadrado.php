<?php
// Requisitar arquivos no PHP
// Um arquivo pode importar uma funçao definido em outro arquivo
// 2 ARQUIVO : 1º - Com a definiçao de uma função - 2º precisa importar o 1º arquivo p/ utilizar a funçao

function quadrado ($numero)
{
    return $numero * $numero;
}