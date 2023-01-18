<?php

include_once __DIR__ . "/../../../_app/models/Model.php";
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

    /**
     * @param integer $LIMIT
     * @return iterable|object
     */
    public function getUsers(int $LIMIT = 6)
    {
        return $this->find()->order(rand(1, $this->numOfUsers()))->limit($LIMIT)->fetch(true);
    }
}
