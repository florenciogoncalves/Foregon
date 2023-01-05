<?php
// require __DIR__ . "/../Models/Produtos.php";
require __DIR__ . "/../../../_app/models/User.php";
require __DIR__ . "/../../../_app/core/Session.php";
require_once __DIR__ . "/../../../_app/core/Uploader.php";

$Session = new Session();
// $ProdutosModel = new produtosModel();
$Uploader = new Uploader($_FILES, 'imagem-produto');
$User = new User();

$FILTER = filter_input_array(INPUT_POST, FILTER_DEFAULT);


$form = [];
$form['descricao_produto'] = filter($_POST['descricao']);
$form['valor'] = filter_var($_POST['valor'], FILTER_VALIDATE_INT);
$form['foto_produto'] = rename_image($_FILES['imagem-produto']['name']);

if ($Session->has('id')) {
    $oldPicId = $_SESSION['id'];
}


if (in_array("", $FILTER) || empty($_FILES['imagem-produto']['name'])) {
    $Session->set("message", "Erro! Preencha todos os campos para actualizar o produto.");
    $Session->set('type', 'danger');
    header("Location: ../../produto.php?id={$oldPicId}");
} else {
    $form = [];
    $form['descricao_produto'] = filter($_POST['descricao']);
    $form['valor'] = filter_var($_POST['valor'], FILTER_VALIDATE_INT);
    $form['foto_produto'] = rename_image($_FILES['imagem-produto']['name']);


    if ($Uploader->save()) {
        remove($User->oldPic($oldPicId));
        if ($User->updateStore($form['descricao_produto'], $form['valor'], $form['foto_produto'], $oldPicId)) {
            $Session->set('message', 'Produto actualizado com sucesso!');
            $Session->set('type', 'success');
            header("Location: ../../produto.php?id={$oldPicId}");
        }
    } else {
        $Uploader->message();
        header("Location: ../../produto.php?id={$oldPicId}");
    }
}
