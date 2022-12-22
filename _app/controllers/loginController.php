<?php

session_start();

require_once __DIR__ . "/../models/User.php";
include_once __DIR__ . "/../boot/helpers.php";

if (isset($_POST['submit'])) {
    $email = filter($_POST['email']);
    $senha = filter($_POST['password']);

    $model = new User();
    $password = $model->getUserPassword($email);
    foreach ($password as $passHash) {
        $userPassword = $passHash;
        if (verifyHash($senha, $userPassword)) {
            $hash = $userPassword;
            $login = $model->login($email, $hash);
            if ($login) {
                $_SESSION['userActive'] = $model->sessionUsername();
                header("Location: ../../home");
            }
        } else {
            $_SESSION['message'] = 'Email ou Senha Incorretos! Verifique e tente novamente.';
            header("Location: ../../login.php");
        }
    }
}
