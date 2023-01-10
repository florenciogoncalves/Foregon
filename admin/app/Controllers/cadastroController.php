<?php

require __DIR__ . "/../Models/User.php";
require __DIR__ . "/../../../_app/boot/helpers.php";

$User = new UserModel();

if (isset($_POST['submit'])) {

    $nome = filter($_POST['nome']);
    $email = filter($_POST['email']);
    $celular = filter($_POST['celular']);
    $senha = filter($_POST['senha']);
    $level = 5;
    // ((new User))->createUserAccount($nome, $email, $celular, hashPassword($senha));
    $data = [];
    $data['nome'] = $nome;
    $data['email'] = $email;
    $data['celular'] = $celular;
    $data['senha'] = hashPassword($senha);
    $data['level'] = $level;


    if ($User->createAdmin($data)) {

        $_SESSION['userActive'] = $nome;
        header("Location: ../../home.php");
    }
}
