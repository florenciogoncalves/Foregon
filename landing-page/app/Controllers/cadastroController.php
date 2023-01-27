<?php
include_once __DIR__ . "/../Models/cadastroModel.php";
include_once __DIR__ . "/../../../_app/boot/helpers.php";
include_once __DIR__ . "/../../../_app/core/Session.php";


$Model = new cadastroModel();
$Session = new Session();

if ($Session->has('cpf')) {
    $cpf = $Session->get('cpf');
    $Session->unset('cpf');
} else {
    header("Location: ../../conclua-o-cadastro.php");
}
$data = [];
$data['cpf'] = filter($cpf);
$data['nomeCompleto'] = filter($_POST['nome']);
$data['telefone'] = filter($_POST['telefone']);
$data['data_nascimento'] = filter($_POST['data-de-nascimento']);
$data['estado'] = filter($_POST['estado']);
$data['cidade'] = filter($_POST['cidade']);
$data['ocupacao'] = filter($_POST['ocupacao']);
$data['rendaMensal'] = filter($_POST['rendaMensal']);


if ($Model->cadastraUser($data)) {
    $Session->set('message', 'Os seus dados foram salvos com sucesso! Crie uma conta aqui <b><a href="../cadastro.php">Cadastre - se</a></b>');
    $Session->set('type', 'success');
    header("Location: ../../index.php");
}
