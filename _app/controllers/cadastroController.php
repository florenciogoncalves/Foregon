<?php

session_start();

include_once __DIR__ . "/../models/User.php";
include_once __DIR__ . "/../boot/helpers.php";

if (isset($_POST['submit'])) {

    $nome = filter($_POST['nome']);
    $email = filter($_POST['email']);
    $celular = filter($_POST['celular']);
    $senha = filter($_POST['senha']);

    ((new User))->createUserAccount($nome, $email, $celular, hashPassword($senha));
    $_SESSION['userActive'] = $nome;
    header("Location: ../../home/index.php");
}
