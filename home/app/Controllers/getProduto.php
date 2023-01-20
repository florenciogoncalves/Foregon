<?php

require __DIR__ . "/../Models/getProdutoModel.php";
require_once __DIR__ . "/../../../_app/core/Session.php";
$id = filter_var($_GET['id'], FILTER_VALIDATE_INT);

$Model = new getProdutosModel();
$Session = new Session();


$produto = $Model->getProdutoById($id);



if ($Session->has('userActive')) {
    $comprador = $Session->get('userActive');
}


try {
    if ($Model->compraProduto($comprador, $produto['nome_produto'], $produto['id'], $produto['foto_produto'], $produto['valor'], 1, $produto['descricao_produto'])) {
        $Session->set('message', 'Sucesso! A sua compra foi realizada com sucesso.');
        $Session->set('type', 'success');
        header("Location: ../../produto.php?id={$id}");
        return;
    }
} catch (\PDOException $e) {
    $Session->set('message', 'Whoops! Parece que você já adquiriu este produto');
    $Session->set('type', 'danger');
    header("Location: ../../produto.php?id={$id}");
}
