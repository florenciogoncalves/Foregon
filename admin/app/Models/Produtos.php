<?php

require __DIR__ . "/../../../_app/models/Model.php";

class produtosModel extends Model
{

    public function __construct()
    {
        parent::__construct("produtos", ["foto_produto", "valor", "nome_produto", "descricao_produto"]);
    }

    /**
     * @param array $data
     * @return void
     */
    public function createProduct(array $data)
    {
        return $this->create($data);
    }
    /**
     * @param boolean $all
     * @param integer $limit
     * @return iterable|object
     */
    public function showProducts(bool $all = false, int $limit = 4): iterable|object|null
    {
        if ($all) {
            return $this->find()->fetch(true);
        }

        return $this->find('vezes_comprado > 0')->limit($limit)->fetch(true);
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

    /**
     * @param integer|null $id
     * @return void
     */
    public function countRows(?int $id)
    {
        return $this->count();
    }

    /**
     * @param integer $id
     * @return iterable|object|null
     */
    public function randomProducts(int $id)
    {
        $filterID = filter_var($id, FILTER_VALIDATE_INT);
        return $this->find('id <> :id', 'id={$filterID}')->order(rand(1, $this->count()))->limit(4)->fetch(true);
    }
    /**
     * @param array $data
     * @param integer $id
     * @return void
     */
    public function updateProduct(array $data, int $id)
    {
        $filterID = filter_var($id, FILTER_VALIDATE_INT);
        return $this->update($data, 'id = :id', 'id={$filterID}');
    }
}
