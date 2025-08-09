
<?php

class Funcionario
{
    public $nome;
    public $salario;
    public $departamento;

}
$jose = new Funcionario;
$jose->nome = 'Jose da Silva';
$jose->salario = 2000;
$jose->departamento = 'Financeiro';

// Para saber tipo de atributos da classe
// get_object_vars — Obtém as propriedades do objeto fornecido
echo '<pre>';
print_r(get_object_vars($jose));
echo '</pre>';

/* RESULTADO RETORNA O NOME E O CONTEUDO NA FORMA DE VETOR
Array
(
    [nome] => Jose da Silva
    [salario] => 2000
    [departamento] => Financeiro
)
*/