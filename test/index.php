<?php

//Load Composer's autoloader
require __DIR__ . '/../lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email(2, "mail.itmob.com.br", "send@itmob.com.br", "teste@123", "ssl", "465", "vinicius@itmob.com.br", "Vinicius Mendes");
$novoEmail->sendMail("Assunto de Teste", "<p>Esse é um e-mail de <b>teste</b>!</p>", "vinicius@itmob.com.br", "Vinicius Mendes", "vinicius@texho.com.br", "Vinicius");

var_dump($novoEmail);