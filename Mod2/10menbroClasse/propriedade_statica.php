<?php
/*
* Atributo da Classe/ Atributo *global da classe e de todos objetos filha da classe
* objeto software que gere um contador para gera id do objeto
*/
class Software
{
    private $id;
    private $nome;
    //criar atributo propriedade da classe - atributo statico guarda mantem o seu valor entre uma chamada e outra
    // e uma variavel da classe
    // static $contador; // qd nao coloca nada frente da var automaticamente ela sera considerada public
     public static $contador; // o ideal e colocar public -pode ser que as proximas versoes ixige
    // para evitara que mexa na variavel fora coloca-se o privete
    // private static $contador;

    public function __construct($nome)
    {
        // cada vez q de um new ele mantem e incrementa mantem o valor da ultima + l
        self::$contador ++;
        $this->id = self::$contador;
        $this->nome = $nome;
        
    }
}

//criar objeto
$s1 = new Software('Gimp');
$s2 = new Software('Ginumeric');

echo '<pre>';
print_r($s1);
echo '<pre>';
print_r($s2);
var_dump(Software::$contador);// int(2) foi possivel acessar pq ela esta no modo public

/*
// o problema da variavel sendo publica e que pode ser alterado fora da classe Exemplo
Software::$contador = 'x';
var_dump(Software::$contador); // string(1) "x" -- nao faz sentido colocar palavra pq e um contador
echo '</pre>';
// Fatal error:  Uncaught Error: Cannot access private property Software::$contador in 
*/