<?php

include_once __DIR__ . "/../models/Mail.php";
include_once __DIR__ . "/../boot/helpers.php";
include_once __DIR__ . "/../core/Session.php";
include_once __DIR__ . "/../boot/mail.php";



$Mailer = new Email();
$Support = new MailSupport();
$Session = new Session();
$FILTER = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (in_array("", $FILTER)) {
    $Session->set('message', 'Preencha o campo com o seu e-mail para continuar!');
    $Session->set('type', 'warning');
    header("Location: ../../esqueceu-a-senha.php");
} else {

    $email = filter($_POST['email']);
    if ($Support->is_User($email)) {

        $Session->set('email', $email);

        if ($Support->hasCode($email)) {
            $Session->set('message', 'Já foi enviado um código para este e-mail, por favor, verifique a sua caixa de e-mails');
            $Session->set('type', 'danger');
            header("Location: ../../esqueceu-a-senha.php");
            return;
        } else {
            $verificationCode = generateVerificationCode();
            $User = $Support->getUser($email);

            $body = "
                <body>
                <h1 style='text-align: center'>A Equipa do <b style='color: #00cc66'>Foregon</b></h1>
                <p></p>
                <div style='text-align: center'>
                <p>Olá Sr(a) <b>{$User}</b>. O código de verificação para recuperar a sua senha é : {$verificationCode}</p>
                </div>
                </body>
                ";


            $Mailer->bootstrap("Recupere a sua senha", $body, $email, $User);
            if ($Mailer->send()) {
                $Support->saveVerificationCode($email, $verificationCode);
                header("Location: ../../esqueceu-a-senha-2.php");
            } else {
                $Session->set('message', 'Whoops! Infelizmente não conseguimos enviar o e-mail! Por favor, tente novamente.');
                $Session->set('type', 'warning');
                header("Location: ../../esqueceu-a-senha.php");
            }
        }
    } else {
        $Session->set('message', 'Lamentamos, mas o e-mail informado não está cadastrado! Tente novamente.');
        $Session->set('type', 'warning');
        header("Location: ../../esqueceu-a-senha.php");
    }
}
