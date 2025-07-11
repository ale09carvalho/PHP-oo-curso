<?php

$salario = 1000;
$tempo = 12;

/* -----------------------
// um if dentro de outro
if ($salario < 1000)
{
    if ($tempo >=12)
    {
        print 'promoção';
    }
}


//-------------------------------------
// COM um if so
if (($salario < 1000) AND ($tempo >=12))
{
    print 'promoção';
}
//----------------------------------------

// COM um if so substituindo o AND pelo &&
if (($salario < 1000) && ($tempo >=12))
{
    print 'promoção';
}
//----------------------------------------
*/

// COM if e else
if (($salario < 1000) && ($tempo >=12))
{
    print 'promoção';
}
else
{
    print 'sem promoçao';
}