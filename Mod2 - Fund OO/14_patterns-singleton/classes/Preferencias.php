<?php
# Padrao de Projeto: conceito Singleton
/*
Este padrão garante a existência de apenas uma instância de uma classe,
mantendo um ponto global de acesso ao seu objeto.
*/

# armazenar as preferencias da aplicaçao
class Preferencias
{
    # guardar as pref - dentro do vetor data
    private $data;
    private static $instance;

    # metodo construtor ninguem pode dar new ou chamar 
    # se quer objeto global nao deseja que usuario/desenvolvedores chame varias vezes o new nessa classe
    private function __construct()
    {
        # dentro metodo construturo - carregar o arquivo application.ini
        $this->data = parse_ini_file('application.ini');
    }
    
    # sempre que quiser obter as pref chamar o metodo getInstance
    # metodo para produzir instancia
    public static function getInstance()
    {
        # sempre vai retornar o mesmo objeto
        # se a var instance esta vazia
        if (empty(self::$instance))
        {
            # declara a variavel e chama metodo construtor
            self::$instance = new self;
        }
        # caso contrario so retorna a var com a instancia criada
        return self::$instance;
    }

    # metodos get - para manipular o vetor getData chave $key
    public function getData($key)
    {
        # retornar o valor da chave
        return $this->data[$key];
    }
    # metodo set - passando a chave e o valor / ler ou alterar variavel
    public function setData($key, $value)
    {
        # se deseja alterar a propriedade do vetor - alterar prop do vetor
        $this->data[$key] =  $value;
    }

    # se deseja gravar as preferencia novamente e salvar novamente
    # metodo save vai pecorrer o vetor de dados e vai escrever novamente no arquivo
    public function save()
    {
        # declara string vazia
        $string = '';
        # verifica se tem conteudo o vetor
        if ($this->data)
        {
            # pecorre o vetor
            foreach ($this->data as $key => $value)
            {
                # monta a string no formato chave = valor
                $string . "{$key} = \"{$value}\" \n";
            }
        }
        # ao final gravar no arquivo
        file_put_contents('application.ini', $string);
    }


}