<?php
class ClienteService
{
    public static function InformaInadimplentes($mailer)
    {
        # chama o metodo Cliente getInadimplentes
        $inadimplentes = Cliente::getInadimplentes();
        # foreach - pecorre todos os inadimplentes cada vai receber 
        foreach($inadimplentes as $cliente)
        {
            # adciona o endereço  - metodo addAdress
            $mailer->addAddress($cliente->email);
            # prepara a  - corpo do email metodo setTextBody
            $mailer->setTextBody("$cliente->nome está inadimplente");
            # envia o email - metodo send()
            $mailer->send();
        }
    }
}
# antiga classe OldEmailService
ClienteService::InformaInadimplentes( new OldEmailService );

# classe nova chamada PHPMailerAdapter
/*
* PHPMailerAdapter - Não tem os metodos- addAdress, setTextBody e send()
* aqui se utiliza um adaptador vai continuar com os metodos antigos mais internament vai despachar para forma PHPMailer
* substituir uma classe por outra por meio de um adaptador
Porque criar uma classe que adpata o interface conj de metodos 
o sistema ja esta acostumado com a classe de um formato - se quer traduzir ou utilizar uma nova classe e 
a nova classe nao mais trabalha naquele formato
Cria-se uma camada ao redor da classe embuti a nova classe por COMPOSIÇÃO pode fazer tbm por herança
e utiliza a classe nova
Bastante simila ao FACEDE - porem este cria uma faxada para esconder um conjunto de classe para nao ficar depedente dela
Adapter  - adaptar uma classe que ja trabalha num formato em um outo formato que o programa precisa para trabalhar
AMBOS OS PADROES FACEDE E ADAPTAER -- SERVE PAR DESACOPLAR 
*/
ClienteService::InformaInadimplentes( new PHPMailerAdapter );