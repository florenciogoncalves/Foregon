<?php

include_once __DIR__ . "/../../../_app/models/Mail.php";
include_once __DIR__ . "/../../../_app/boot/helpers.php";
include_once __DIR__ . "/../../../_app/core/Session.php";
include_once __DIR__ . "/../../../_app/boot/mail.php";
include_once __DIR__ . "/../../../_app/models/User.php";



$Mailer = new Email();
$Support = new MailSupport();
$Session = new Session();
$userModel = new User();

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
            if ($userModel->userLevel($email) > 4) {

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
                $Support->saveVerificationCode($email, $verificationCode);

                // $Mailer->bootstrap("Recupere a sua senha", $body, $email, $User); A ser usado...
                header("Location: ../../esqueceu-a-senha-2.php");
            } else {
                $Session->set('message', 'Erro! Você não tem permissão para executar esta ação!');
                $Session->set('type', 'danger');
                header("Location: ../../esqueceu-a-senha.php");
            }
        }
    } else {
        $Session->set('message', 'Lamentamos, mas o e-mail informado não está cadastrado! Tente novamente.');
        $Session->set('type', 'warning');
        header("Location: ../../esqueceu-a-senha.php");
    }
}
