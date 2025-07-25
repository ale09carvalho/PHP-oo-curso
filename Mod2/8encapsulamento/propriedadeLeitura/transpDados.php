<?php
/*
* Data Transfer Object (DTO) O bjeto de Transporte de Dados é um padrão de design usado para transferir dados 
* entre processos.
* Este exemplo demonstra o uso de propriedades readonly para garantir que os dados de endereço não sejam alterados 
* após a inicialização.
* usado apenas para carregar dados, nao e necessario ter metodos
**/

class Endereco
{
    /* com a promoça do construtor, as propriedades são automaticamente 
    * inicializadas e marcadas como readonly.
    // todos sao somente leitura, ou seja, readonly
    // essas propriedades não podem ser alteradas após a inicialização
    public readonly string $logradouro;
    public readonly string $numero;
    public readonly string $bairro;
    public readonly string $cep;

    //public function __construct(string $logradouro, string $numero, string $bairro, string $cep)
    */

    // promover as propriedades paramentros para readonly - modificador tranf. atributo publico
    // objeto de transporte de dados - Data Transfer Object (DTO)utilizando a promoção de propriedades do contrutor
    // as propriedades são automaticamente inicializadas e marcadas como readonly
    public function __construct(public readonly string $logradouro, public readonly string $numero, public readonly string $bairro, public readonly string $cep)
    {
        // naão precisa atribuir - promoçao faz isso automaticamente
        //$this->logradouro = $logradouro;
        //$this->numero = $numero;
        //$this->bairro = $bairro;
        //$this->cep = $cep;
    }
}

$x = new Endereco('Rua Maria da Silva', '123', 'Centro', '12345-678');
// Tentar alterar qualquer propriedade resultará em um erro fatal
//$x->logradouro = 'Rua B'; 

// Fatal error: Uncaught Error: Cannot modify readonly property Endereco::$logradouro
// nao pode modiaficar a propriedade readonly Endereco::$logradouro

// acessar somente leitura
echo "<pre>";
print $x->logradouro;