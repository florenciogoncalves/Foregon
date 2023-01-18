<?php

session_start();

require_once __DIR__ . "/../models/User.php";
include_once __DIR__ . "/../core/Session.php";
include_once __DIR__ . "/../boot/helpers.php";

$Session = new Session();

if (isset($_POST['submit'])) {

    $email = filter($_POST['email']);
    $senha = filter($_POST['password']);

    if (empty($email) || empty($senha)) {
        $Session->set('message', 'Preencha todos os campos!');
        $Session->set('type', 'danger');
        header("Location: ../../login.php");
    } else {

        $model = new User();
        $password = $model->getUserPassword($email);
        foreach ($password as $passHash) {
            $userPassword = $passHash;
        }

        if (verifyHash($senha, $userPassword)) {
            $login = $model->login($email, $userPassword);
            if ($login) {
                $_SESSION['userActive'] = $model->sessionUsername();
                header("Location: ../../home");
            }
        } else {
            $Session->set('message', 'Email ou Senha Incorretos! Verifique e tente novamente.');
            $Session->set('type', 'danger');
            header("Location: ../../login.php");
        }
    }
}
