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
 -- RECURSO DO PHP
 */

 # NOVO RECURSO DO PHP -- ENUMERAÇAO

 # CRIAR UMA ENUMERAÇAO - lista de opçoes
 enum ZoomMode
 {
    #listar de opções
    case Small;
    case Medium;
    case Big;
    case SuperBig;
 }

 # Classe Caledario
 class Calendar
 {
    # modo tipo ZoomMode[enumeração]
    private ZoomMode $zooMode;

    # metodo para configurar o ZooMode
    public function setZoomMode(ZoomMode $mode)
    {
        # guardar
        $this->zoomMode = $mode;
    }
    # exibir calendario
    public function show()
    {
        # if para saber o ZoomMode
        if ($this->zoomMode == ZoomMode::Small)
        {
            #calendario condensado
            print "Exibindo no modo pequeno";
        }
        else if ($this->zoomMode == ZoomMode::Medium)
        {
            #calendario condensado
            print "Exibindo no modo MEDIO";
        }
        else if ($this->zoomMode == ZoomMode::Big)
        {
            #calendario condensado
            print "Exibindo no modo GRANDE";
        }
        else if ($this->zoomMode == ZoomMode::SuperBig)
        {
            #calendario condensado
            print "Exibindo no modo SUPER GRANDE";
        }
    }
 }
 # criar objeto - config
 $calendar = new Calendar;
 # setZommMode(NOME DA ENUMERAÇAO :: + A OPÇAO -> ZoomMode::Big)
 # setou parao modo grande
 $calendar->setZoomMode(ZoomMode::Big );
# EXIBIR O CALENDARIO
$calendar->show();



