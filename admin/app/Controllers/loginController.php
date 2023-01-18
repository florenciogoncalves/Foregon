<?php

require __DIR__ . "/../../../_app/models/User.php";
include_once __DIR__ . "/../../../_app/core/Session.php";
include_once __DIR__ . "/../../../_app/boot/helpers.php";

$Session = new Session();
$model = new User();

if (isset($_POST['submit'])) {

    $email = filter($_POST['email']);
    $senha = filter($_POST['password']);

    if (empty($email) || empty($senha)) {
        $Session->set('message', 'Preencha todos os campos!');
        $Session->set('type', 'danger');
        header("Location: ../../index.php");
    } else {

        $password = $model->getUserPassword($email);
        foreach ($password as $passHash) {
            $userPassword = $passHash;
        }

        if (verifyHash($senha, $userPassword)) {
            $login = $model->login($email, $userPassword);

            if ($model->userLevel($email) > 4) {
                if ($login) {
                    $_SESSION['userActive'] = $model->sessionUsername();
                    header("Location: ../../home.php");
                }
            } else {
                $Session->set('message', 'Erro! Você não tem permissão suficiente para logar!');
                $Session->set('type', 'danger');
                header("Location: ../../index.php");
            }
        } else {
            $Session->set('message', 'Email ou Senha Incorretos! Verifique e tente novamente.');
            $Session->set('type', 'danger');
            header("Location: ../../index.php");
        }
    }
}
