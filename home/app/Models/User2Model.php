<?php
include_once __DIR__ . "/../../../_app/models/Model.php";

class User2Model extends Model
{

    public function __construct()
    {
        parent::__construct("userPhoto", ["user", "photo"]);
    }

    public function getUserPhoto(string $user)
    {
        return $this->find("user = :nome", "nome={$user}")->fetch();
    }
}
