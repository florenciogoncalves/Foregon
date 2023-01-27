<?php
include_once __DIR__ . "/../Models/cadastroModel.php";
include_once __DIR__ . "/../../../_app/boot/helpers.php";
include_once __DIR__ . "/../../../_app/core/Session.php";

$Session = new Session();
$Model = new cadastroModel();
/**
 * 290.222.716-76 - Para testes
 */

$cpf = filter($_POST['cpf']);

if ($Model->has($cpf)) {
    $Session->set('message', 'Lamentamos, mas o <b>CPF</b> informado já está cadastrado!');
    $Session->set('type', 'danger');
    header("Location: ../../index.php");
} else {

    if (!is_cpf($cpf)) {
        $Session->set('message', 'Lamentamos, mas o <b>CPF</b> informado não é válido!');
        $Session->set('type', 'danger');
        header("Location: ../../index.php");
    } else {
        $Session->set('cpf', $cpf);
        header("Location: ../../conclua-o-cadastro.php");
    }
}
