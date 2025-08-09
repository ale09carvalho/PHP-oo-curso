<?php
/*
* Atributo da Classe/ Atributo *global da classe e de todos objetos filha da classe
* objeto software que gere um contador para gera id do objeto
* METODO ESTATICO - palavra-chave static na definição de métodos e propriedades estáticas.
* Declarar propriedades ou métodos de uma classe como estáticos 
* faz deles acessíveis sem a necessidade de instanciar a classe.
*/
class Software
{
    private $id;
    private $nome;
    //criar atributo propriedade da classe - e uma variavel da classe
    private static $contador;

    public function __construct($nome)
    {
        // cada vez q de um new ele mantem e incrementa mantem o valor da ultima + l
        // incrementa a var da classe
        self::$contador ++;
        $this->id = self::$contador;
        $this->nome = $nome;
    }
    // METODO DA CLASSE
    // ** Se precisar acessa var contador de fora da classe e preciso criar metodo estico
    // qdo cria metodo estatico ele nao precisa de objeto para existir
    //Metodo estatico
    public static function getContador()
    {
        // acessar a var statica
        // nao pode usar a palavra $this dentro do metodo statico porque nao esta se referindo a um objeto
        // metodo statico nao precisa de objeto para existir
        return self::$contador; // acessar variavel estatica

    }
}
//criar objeto
$s1 = new Software('Gimp');
$s2 = new Software('Ginumeric');

echo '<pre>';
print_r($s1);
echo '<pre>';
print_r($s2);

// ACESSA A VARIAVEL DA CLASSE 
// forma que pode ser chamado dessa forma --> classe :: metodo --> (Software::getContador)
var_dump(Software::getContador());


