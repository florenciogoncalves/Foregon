<?php

require __DIR__ . "/../Models/Produtos.php";
require __DIR__ . "/../../../_app/core/Session.php";
require_once __DIR__ . "/../../../_app/core/Uploader.php";


$Session = new Session();
$ProdutosModel = new produtosModel();
$Uploader = new Uploader($_FILES);


$FILTER = filter_input_array(INPUT_POST, FILTER_DEFAULT);


if (in_array("", $FILTER) || empty($_FILES['produto-foto']['name'])) {
    $Session->set("message", "Erro! Preencha todos os campos para adicionar o produto.");
    $Session->set('type', 'danger');
    header("Location: ../../produtos.php");
} else {
    $form = [];
    $form['nome_produto'] = $_POST['nome-produto'];
    $form['descricao_produto'] = $_POST['descricao'];
    $form['valor'] = $_POST['valor'];
    $form['foto_produto'] = $Uploader->renamePhoto();

    if ($Uploader->save()) {
        if ($ProdutosModel->createProduct($form)) {
            $Session->set('message', 'Produto Cadastrado com sucesso!');
            $Session->set('type', 'success');
            header("Location: ../../produtos.php");
        }
    } else {
        header("Location: ../../produtos.php");
        return $Uploader->message();
    }
}
