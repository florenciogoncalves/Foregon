<?php


require __DIR__ . "/../../../_app/models/Model.php";
class UserModel extends Model
{

    public function __construct()
    {
        parent::__construct("users", ['nome', 'email', 'celular', 'senha', 'level']);
    }

    public function createAdmin(array $data)
    {
        return $this->create($data);
    }
}
