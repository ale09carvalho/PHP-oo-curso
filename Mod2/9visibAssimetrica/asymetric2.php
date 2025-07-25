<?php
/*
* Visibilidade de Propriedade Assimétrica
* 2 TIPOS SITUAÇÃO PODE TER UMA VISIBILIDADE DIFERENTE:
* 1. Visibilidade de  Leitura (get)
* 2. Visibilidade de Gravação (set)
// as propriedades também podem ter sua visibilidade definida assimetricamente, 
// com escopos diferentes para leitura ( get) e escrita ( set).
*/

class Cidade
{
    // Assimétrica: leitura pública, escrita privada atribuiçao ja e automatica
    public function __construct(public private(set) string $nome) {
    }   
}

$c1 = new Cidade('São Paulo');
print $c1->nome; // Acesso permitido, leitura pública
echo "<br>\n";

// atribuiçao externa
$c1->nome = 'alessandra'; // Acesso negado, escrita privada