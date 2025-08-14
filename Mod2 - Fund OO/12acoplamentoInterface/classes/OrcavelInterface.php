<?php
/*
# ACOPLAMENTO - Mede quanto um modulo(classse, metodo, componente) conhece e depende de outro.
OBJETIVO e criar modelos com baixo acoplamento, pois o alto acoplamento diminui a reusabilidade, pois
os objetos nao podem ser usados sozinhos;
Códigos desacoplados são aqueles de relação fraca, e não dependem de outros para fazer sua funcionalidade básica. 
É sempre desejável um baixo nível de acoplamento
*/

# Acionar a interface na comunicação das classes
interface OrcavelInterface
{
    public function getPreco();
}