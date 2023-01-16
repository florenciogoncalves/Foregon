<?php

require __DIR__ . "/../Models/Blog.php";
require __DIR__ . "/../../../_app/core/Uploader.php";
include_once __DIR__ . "/../../../_app/core/Session.php";


$blogModel = new Blog();
$Session = new Session();
$Uploader = new Uploader($_FILES, 'postImage');

$FILTER = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (in_array("", $FILTER) || empty($_FILES['postImage']['name'])) {
    $Session->set("message", "Erro! Preencha todos os campos para adicionar o produto.");
    $Session->set('type', 'danger');
    header("Location: ../../blog.php");
} else {
    createFolder('blogImages');

    $form = [];
    $form['photo_post'] = $Uploader->renamePhoto(false, 'blog_post_image');
    $form['titulo'] = filter($_POST['titulo']);
    $form['escritor'] = filter($_POST['escritor']);
    $form['texto'] = filter($_POST['texto']);
    $form['referencia'] = filter($_POST['referencia']);

    if ($Uploader->save('blogImages')) {
        if ($blogModel->createPost($form)) {
            $Session->set("message", "O seu post foi criado e publicado com sucesso!");
            $Session->set('type', 'success');
            header("Location: ../../blog.php");
        }
    }
}
