# Biblioteca de Notificação via e-mail utilizando o phpMailer

Essa biblioteca tem por função enviar e-mail utilizando a biblioteca phpmailer. Fazer essa ação de forma descomplicada é essencial para qualquer sistema.

Para fazer a instalação da biblioteca, execute o seguinte comando:

```sh
composer require viniciusme/notification
```

Para fazer o uso da biblioteca, basta requerir o autoload do composer, invocar a classe e fazer a chamada do método:

```sh
<?php

require __DIR__ . '/vendor/autoload.php';

USE Notification\Email;

$email = new Email(2, "mail.host.com", "your@email.com", "your-pass", "smtp secure (tls/ssl)", "port (587)", "from@email.com", "From Name");

$email->sendEmail("Subject", "Content", "reply@email.com", "Replay Name", "address@email.com", "Address Name");
```

Note que toda a configuração do envio do e-mail está utilizando o método mágico construtor! Uma vez invocado o método construtor dentro da sua aplicação, seu sistema estará apto a efetuar os disparos.

### Developers

- [Gustavo Web] - Desenvolvedor desta biblioteca e tutor do curso Composer na Prática!
- [Robson V. Leite] - CEO and Founder UpInside Treinamentos
- [UpInside Treinamentos] - Site oficial da sua escola de programação e marketing digital
- [phpMailer] - Lib to send E-mail

## License

MIT

**Mais um curso da UpInside Treinamentos, faça bom uso!**

[//]: #
[gustavo web]: mailto:gustavo@upinside.com.br
[robson v. leite]: mailto:robson@upinside.com.br
[upinside treinamentos]: https://www.upinside.com.br
[phpmailer]: https://github.com/PHPMailer/PHPMailer
