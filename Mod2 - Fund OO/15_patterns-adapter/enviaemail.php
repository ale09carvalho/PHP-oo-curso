<?php
require_once 'PHPMailer.php';
require_once 'classes/PHPMailerAdapter.php';

# instancia obj do Adaptador
$mail = new PHPMailerAdapter;
# chama os metodos do Adaptador 
$mail->setForm('ale09.carvalhor@gmail.com', 'Alessandra');
# adciona os endereços 
$mail->addAddress('destinarario@tal.com', 'Nome');
# defina o assunto
$mail->setSubject('Ola.....');
# corpo do email
$mail->setTextBody('Isso é um teste');
# despacha o email
$mail->send();