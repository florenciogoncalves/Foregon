<?php

include_once __DIR__ . "/../models/Mail.php";
include_once __DIR__ . "/../boot/helpers.php";
include_once __DIR__ . "/../core/Session.php";

$Session = new Session();
$Support = new MailSupport();

if ($Session->has('email')) {
    $email = $_SESSION['email'];
}

$FILTER = filter_input_array(INPUT_POST, FILTER_DEFAULT);
if (in_array("", $FILTER)) {
    $Session->set('message', 'Insira uma senha para continuar');
    $Session->set('type', 'warning');
    header("Location: ../../escolha-a-senha.php");
} else {
    $senha = filter($_POST['senha']);

    $hashSenha = hashPassword($senha);
    if ($Support->updatePassword($hashSenha, $email)) {
        $Session->set('message', 'Sucesso! A sua senha foi actualizada com sucesso!');
        $Session->set('type', 'success');
        header("Location: ../../login.php");
    } else {
        $Session->set('message', 'Whoops! Parece que alguma coisa deu errado! Por favor, tente novamente.');
        $Session->set('type', 'danger');
        header("Location: ../../escolha-a-senha.php");
    }
}
