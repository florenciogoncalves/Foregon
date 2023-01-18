<?php

include_once __DIR__ . "/../../../_app/models/Mail.php";
include_once __DIR__ . "/../../../_app/boot/helpers.php";
include_once __DIR__ . "/../../../_app/core/Session.php";
include_once __DIR__ . "/../../../_app/boot/mail.php";



$Mailer = new Email();
$Support = new MailSupport();
$Session = new Session();
$FILTER = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if ($Session->has('email')) {

    $email = $_SESSION['email'];
}


foreach ($FILTER as $code) {
    $numbers[] = $code;
}

$fullCode = "" . join("", $numbers);



if (in_array("", $FILTER)) {
    $Session->set('message', 'Insira o código enviado pra sí por e-mail para continuar!');
    $Session->set('type', 'warning');
    header("Location: ../../esqueceu-a-senha-2.php");
} else {

    if (!$Support->verifyValidation($email)) {

        if ($Support->getVerificationCode($email) == $fullCode) {
            $Session->set('email', $email);
            $Support->delete($email);
            header("Location: ../../escolha-a-senha.php");
            return;
        } else {
            $Session->set('message', 'Código Incorreto! Verifique e tente novamente');
            $Session->set('type', 'danger');
            header("Location: ../../esqueceu-a-senha-2.php");
        }
    } else {
        $Session->set('message', 'O código enviado pra sí expirou! Tente Novamente.');
        $Session->set('type', 'danger');
        header("Location: ../../esqueceu-a-senha.php");
    }
}
