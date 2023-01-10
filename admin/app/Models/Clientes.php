<?php

require __DIR__ . "/../../../_app/models/Model.php";
class clientesModel extends Model
{
    public function __construct()
    {
        parent::__construct("users", ['nome', 'email', 'celular', 'senha']);
    }

    /**
     * @return integer
     */
    public function numOfUsers(): int
    {
        return $this->find('level != 5')->count();
    }
}
