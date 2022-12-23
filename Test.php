<?php

require __DIR__ . "/_app/models/Model.php";

class UserModel extends Model
{
    public function __construct()
    {
        parent::__construct("users", ['nome', 'email', 'celular', 'senha']);
    }

    public function CreateAccount()
    {
        $user = [];
        $user['nome'] = 'Silvio';
        $user['email'] = 'silviosi794@gmail.com';
        $user['celular'] = '940989200';
        $user['senha'] = '123456';

        $nome = $user['nome'];
        // $this->update($user, 'nome = :nome', 'nome = {$nome}');

        if ($this->delete('id = :id', 'id=15')) {
            echo "Pass";
        } else {
            echo "fail";
        }
    }
}

$model = new UserModel();
$model->CreateAccount();
