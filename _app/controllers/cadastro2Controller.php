<?php

include_once __DIR__ . "/../core/Uploader.php";
include_once __DIR__ . "/../models/FotoUserModel.php";

$Session = new Session();
$Store = new FotoUserModel();

if (!empty($_FILES['foto-de-perfil']['name'])) {

    createFolder('users');

    $Uploader = new Uploader($_FILES, 'foto-de-perfil');
    if ($Session->has('userActive')) {
        $user = $_SESSION['userActive'];
    }
    $form = [];
    $form['user'] = $user;
    $form['photo'] = $Uploader->renamePhoto(true);



    if ($Uploader->save('users', true)) {
        if ($Store->insertPhoto($form)) {
            header("Location: ../../home/index.php");
        }
    }
} else {
    $Session->set('message', 'Insira uma foto para continuar');
    $Session->set('type', 'danger');
    header("Location: ../../cadastro-2.php");
}
