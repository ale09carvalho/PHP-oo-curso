<?php
class Usuario
{
    private readonly int $id; // readonly essa propriedade propriedade não pode ser alterada após a inicialização
    private string $login;
    private string $nome;
    private string $email;

    // metodo construtor que recebe os parametros e inicializa as propriedades
    public function __construct(int $id, string $login, string $nome, string $email)
    {
        // armazena internamento os atributos
        $this->id = $id;
        $this->login = $login;
        $this->nome = $nome;
        $this->email = $email;
    }

    // outro metodos getId que retorna o id para manipular o objeto
    public function setId($id)
    {
        $this->id = $id;
    }
}

// criar um objeto do tipo Usuario
$x = new Usuario(1, 'pedro', 'Pedro da Silva', 'pedro@exemplo.com');
$x->setId(5);
// Fatal error: Uncaught Error: Cannot modify readonly property Usuario::
// Ao tentar alterar o id, mas isso não é permitido pois a propriedade é readonly

// imprimir o objeto criado
echo "<pre>";
print_r($x);
