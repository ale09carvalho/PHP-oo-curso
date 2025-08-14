<?php
/*
* cria-se uma:
class PHPMailerAdapter
{

}
Como utilizar:
$pm = new PHPMailer;
# From do email
$pm->From = 'teste@mail.com';
# corpo do email
$pm->Body = 'sadflasf';
# cria-se um adaptador para PHPMailer trabalhar
*/

class PHPMailerAdapter
{
    private $pm;

    # metodo Construtor
    function __construct()
    {
        # instanciar a PHPMailer -- (true) sempre que de erro ele lança uma exceção
        $this->pm = new PHPMailer(true);
        # definir o CharSet
        $this->pm ->CharSet = 'utf-8';
    }
    # CRIA-SE OS METODOS NO FORMATO NECESSARIO -
    # ($from, $name) Email da origem e nome
    function setForm($from, $name)
    {
        # forma que a PHPMailer trabalha
        $this->pm->From = $from;
        $this->pm->FromName = $name;
    }
    # metodo para definir o assunto da mensagem setSubject
    function setSubject($subject)
    {
        # na  PHPMailer Subject = $subject
        $this->pm->Subject = $subject;
    }
    # metodo para definir o corpo do email
    public function setTextBody($body)
    {
        # na PHPMailer é Body = $body, isHTML =(false) qdo nao e texto nao e HTML
        $this->pm->Body = $body;
        $this->pm->isHTML =(false);

    }
    # Metodo para adcionar o endereço de destino e nome do destinatario
    public function addAddress($address, $name= '')
    {
        # na PHPMailer é addAddres ($address, $name)
        $this->pm->addAddress($address, $name);
    }
    # metodo de envio send()
    public function send()
    {
        # chamar o metodo send() da PHPMailer
        $this->pm->Send();
        return true;
    }

}