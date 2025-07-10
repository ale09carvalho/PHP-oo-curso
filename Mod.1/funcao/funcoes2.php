<?php
// Formas de trabalhar com funçoes no PHP
// funçao percorre cada vez que for executada  vai exibir pecorreu + ...tantos km
// static var q existe detro de um contextod e uma funçao ela retem o seu valor entre uma chamada e outra
// mantem o seu valor


function percorre ($km)
{
    // recurso php var statica
    static $total; // static retem seu valor entre uma chamada e outra
    $total += $km;
    // $km parametro de entrada (100, 100, 100) e var $total que e o acumulado ($total += $km;) da var $km//
    print "pecorreu mais $km  de $total<br>";
    // resultaso: pecorreu mais 100 de 100 - pecorreu mais 100 de 200 - pecorreu mais 100 de 300
}
percorre(100);
percorre(100);
percorre(100);
//pecorreu mais 100 pecorreu mais 100 pecorreu mais 100

// Acumular o km pecorrido sem usar uma variavel global