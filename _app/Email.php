<?php

namespace Notification;

//Importar classes PHPMailer para o namespace global
//Eles devem estar no topo do seu script, não dentro de uma função
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Email {
    
    private $mail = \stdClass::class;

    public function __construct($smtpDebug, $host, $user, $pass, $smtpSecure, $port, $setFromEmail, $setFromName) {

        //Instanciação e passagem `true` para tratar exceções
        $this->mail = new PHPMailer(true);

        //Configurações do servidor
        $this->mail->SMTPDebug = $smtpDebug;                         //Habilitar saída de depuração detalhada
        $this->mail->isSMTP();                                       //Enviar usando SMTP
        $this->mail->Host = $host;                                   //Defina o servidor SMTP para enviar
        $this->mail->SMTPAuth = true;                                //Habilitar autenticação SMTP
        $this->mail->Username = $user;                               //Nome de usuário SMTP
        $this->mail->Password = $pass;                               //Senha SMTP
        $this->mail->SMTPSecure = $smtpSecure;                       //Habilita a criptografia TLS; `PHPMailer :: ENCRYPTION_SMTPS`
        $this->mail->Port = $port;                                   //Porta TCP para conectar, use 465 para `PHPMailer :: ENCRYPTION_SMTPS`

        //Configurando para funcionar em portugues e aceita caractres especiais
        $this->mail->CharSet = 'utf-8';
        $this->mail->setLanguage('br');
        $this->mail->isHTML(true);

        //Destinatário
        $this->mail->setFrom($setFromEmail, $setFromName);

    }

    public function  sendMail($subject, $body, $replyEmail, $replyName, $addressEmail, $addressName) {

        $this->mail->Subject = (string)$subject;
        $this->mail->Body = $body;

        $this->mail->addReplyTo($replyEmail, $replyName);
        $this->mail->addAddress($addressEmail, $addressName);

        try {

            $this->mail->send();

        } catch(Exception $e) {

            echo "Erro ao enviar p e-mail: {$this->mail->ErrorInfo} {$e->getMessage()}";

        }

    }
}