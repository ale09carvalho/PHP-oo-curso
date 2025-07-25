<?php

class Cidade
{
    // Assimétrica: leitura pública, escrita privada atribuiçao ja e automatica
    public function __construct(public private(set) string $nome) {
    }   
}
class Pessoa
{
    public private(set) string $nome;
    public private(set) Cidade $cidade;

    public function __construct(string $nome, Cidade $cidade) {
        // gravar no metodo tracidional
        $this->nome = $nome;
        $this->cidade = $cidade; // Atribuição via método, acesso permitido
    }
}
// Criação de instâncias
$c1 = new Cidade('São Paulo');
$p1 = new Pessoa('João', $c1);// Atribuição via método, acesso permitido

// Acesso à propriedade pública
print $p1->nome; // Acesso permitido, leitura pública
echo "<br>\n";

// atribuiçao externa
// 2 atribuitos publico encadeados a cidade e nome da cidade
print $p1->cidade->nome; // Acesso permitido, leitura pública