<?php
include_once __DIR__ . "/../../../_app/models/Model.php";
class fotoUsers extends Model
{
    public function __construct()
    {
        parent::__construct("userPhoto", ['user', 'photo']);
    }

    /**
     * @param string $user
     * @return iterable|object
     */
    public function photo(string $user = null)
    {
        // return $this->find("user = :user", "user={$user}")->fetch(true);
        return $this->find()->fetch(true);
    }
}
