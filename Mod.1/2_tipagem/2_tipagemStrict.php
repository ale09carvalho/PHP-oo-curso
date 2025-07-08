<?php
declare(strict_types=1); // exige que os argumentos seja daquele tipo com exceçao float e interger que ele consegue
// fazer o intercambio naturalmente

function calcular_imc (float $peso, float $altura): float
{
    var_dump($peso, $altura);
    print '<br>';
    return $peso/ ($altura*$altura);
}
var_dump (calcular_imc ('75.5', 1.8) ); // float(75.5) float(1.8) - float(23.30246913580247)

// ('75.5', 1.8) sem o strict_type ele vai tentar converter a string em float mas com strict_type ligado ele vai impedir a coversao
 
$peso = '75';
 print '<br>';
 var_dump (calcular_imc((float)$peso, 1.8));


