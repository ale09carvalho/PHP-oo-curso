<?php
/*
* 3 Tipos de Visibilidade basica de Propriedades sao:
* 1. Pública
* 2. Privada
* 3. Protegida
* Visibilidade de Propriedade Assimétrica
* 2 TIPOS SITUAÇÃO PODE TER UMA VISIBILIDADE DIFERENTE:
* 1. Visibilidade de  Leitura (get)
* 2. Visibilidade de Gravação (set)

// as propriedades também podem ter sua visibilidade definida assimetricamente, 
// com escopos diferentes para leitura ( get) e escrita ( set).
*/
class Cidade
{
    // Assimétrica: leitura pública, escrita privada
    // e public mais na hora de gravar e private
    public private(set) string $nome;

    // no construtor vai passar porque e uma atribuiçao via metodo
    // e o construtor tem acesso a propriedade privada
    public function __construct(string $nome) {
        $this->nome = $nome;
    }   
}

$c1 = new Cidade('São Paulo');
print $c1->nome; // Acesso permitido, leitura pública
echo "<br>\n";
// atribuiçao externa
$c1->nome = 'alessandra'; // Acesso negado, escrita privada