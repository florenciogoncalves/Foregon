<?php
require __DIR__ . "/../../../_app/models/Model.php";

class UserModel extends Model
{

    public function __construct()
    {
        parent::__construct("users", ["nome", "email", "celular", "senha"]);
    }

    public function getUserInfo(string $user)
    {
        return $this->find("nome = :nome", "nome={$user}")->fetch();
    }
}
