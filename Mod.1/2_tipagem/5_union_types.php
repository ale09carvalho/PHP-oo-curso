<?php
declare(strict_types=1);
// funçao soma data vai receber uma data base e vai receber um intervalo, essa funçao faca um teste e
// aceite no paramentro do intervalo tanto um nº em dias qto um objeto da classe dateInterval
// passar uma data exe. 2023-12-10 e numero de dias - A funçao (soma_data)vai somar em cima da data  a quantidade de dias e
// retornar nova data
// OUTRA FORMA
// e passando o objeto do tipo DateInterval do php que aceita a seguinte sintaxe (P10D- Um periodo de 10 dias que pode esta somando)
// exite tambem um (P12M - um periodo de 12 meses)
// Fazer para aceitar o 2 tipos ou seja tanto um objeto DateInterval | qto Int
// dessa forma estamos colocando paramentros bem distintos
// o ideal e evitar colocar parametro bem distintos nao relacionado entre si para evitar confunsao
// Embora o php ja tem a classe datetime
// aceita 2 tipo  DateInterval| inteiro

function soma_data($data_base, DateInterval|int $interval)
{
    // vai pega a data base e transf objeto
    $date = new DateTime($data_base);

    // testar o parametro Interval
    if ($interval instanceof DateInterval)// se for obj da classe dateInterval
    {
        // pega obj tem a data inicial e adcionar o intervalo
        $date->add($interval);
    }
    else // senao considera que ele e um inteiro
    {
        //Se for inteiro cria-se obj DateInterval com a sintaxe
        $date->add(new DateInterval('P'.$interval.'D'));// P periodo + Dias
    }
    // retorna a data formatada string formato ANO MES E DIA
    return $date->format('Y-m-d');
}

print soma_data('2023-12-10', 5);
print "<br>\n";
print soma_data('2023-12-10', new DateInterval('P12M'));

