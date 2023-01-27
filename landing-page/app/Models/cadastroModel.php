<?php

require __DIR__ . "/../../../_app/models/Model.php";

class cadastroModel extends Model
{
    public function __construct()
    {
        parent::__construct('user_final', ['cpf', 'nomeCompleto', 'telefone', 'estado', 'ocupacao', 'data_nascimento', 'cidade', 'rendaMensal']);
    }


    public function cadastraUser(array $data)
    {
        return $this->create($data);
    }

    public function has($cpf): bool
    {
        $query = $this->find("cpf = :cpf", "cpf={$cpf}")->count();
        if ($query > 0) {
            return true;
        }
        return false;
    }
}
