<?php

require __DIR__ . "/../../../_app/models/Model.php";

class produtosModel extends Model
{

    public function __construct()
    {
        parent::__construct("produtos", ["foto_produto", "valor", "nome_produto", "descricao_produto"]);
    }

    /**
     * @param boolean $withLimit
     * @param integer $LIMIT
     * @return boolean|iterable|object
     */
    public function findProducts(bool $withLimit = false, int $LIMIT = 6)
    {
        if ($withLimit) {
            return $this->find()->limit($LIMIT)->order(rand(1, $this->count()))->fetch(true);
        }
        return $this->find()->fetch(true);
    }

    /**
     * @param integer|null $id
     * @return int
     */
    public function countRows(?int $id)
    {
        return $this->count();
    }

    public function numOfClients(): int
    {
        return $this->find();
    }

    /**
     * @param integer $id
     * @return iterable|object
     */
    public function productById(int $id)
    {
        $filterID = filter_var($id, FILTER_VALIDATE_INT);
        return $this->findById($id);
    }
}
