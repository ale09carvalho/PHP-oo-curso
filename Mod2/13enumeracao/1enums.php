<?php
/*
 * Enumerações (Enums) em PHP são um recurso que permite definir um conjunto fixo e restrito de valores 
 * possíveis para um determinado tipo.  * Elas funcionam como uma camada mais segura e expressiva sobre 
 * classes e constantes, evitando o uso de strings ou números "mágicos" no código.
 *
 * Enums são especialmente úteis quando o programa precisa tomar decisões baseadas em um número limitado
 * de opções predefinidas.
 * Em vez de depender de condições soltas ou valores arbitrários, podemos usar enums para tornar 
 * o código mais legível, previsível e fácil de manter.
 *
 * Exemplo de uso:
 * Suponha um componente de calendário com quatro modos de exibição:
 * - MUITO_PEQUENA
 * - PEQUENA
 * - MEDIA
 * - GRANDE
 *
 * Podemos representar essas opções com um enum:
 */
# ENUMERÇAO UTILIZANDO CONSTANTE DE CLASSE 

#componte classe calendario
class Calendar
{
    const MODO_ZOOM_SMALL = 1;
    const MODO_ZOOM_MEDIUM = 2;
    const MODO_ZOOM_BIG = 3;
    const MODO_ZOOM_SUPERBIG = 4;

    private $zoomMode;

    # metodo para configurar o modo de zoom(exibe usuario forma condensada ou expandida)
    public function setZommMode($mode)
    {
        $this->zoomMode = $mode;
    }
    public function show()
    {
        //...
    }

}
# criar o objeto Calendario
$calendar = new Calendar;
# setar o modo de zomm - constante (Calendar::MODO_ZOOM_MEDIUM);
$calendar->setZommMode(Calendar::MODO_ZOOM_MEDIUM);

