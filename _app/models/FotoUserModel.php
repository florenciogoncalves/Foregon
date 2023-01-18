<?php
include_once __DIR__ . "/Model.php";

class FotoUserModel extends Model
{

    public function __construct()
    {
        parent::__construct("userPhoto", ['user', 'photo']);
    }

    public function insertPhoto(array $data)
    {
        return $this->create($data);
    }
}
