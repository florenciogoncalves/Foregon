<?php

include_once __DIR__ . "/../../../_app/core/connect.php";

class getProdutosModel extends connect
{

    /**
     * @param integer $id
     * @return array
     */
    public function getProdutoById(int $id): array
    {
        $query = $this->connect->prepare("SELECT * FROM produtos WHERE id = ? LIMIT 1");
        $query->bindParam(1, $id);
        $query->execute();
        foreach ($query->fetchAll(PDO::FETCH_ASSOC) as $produto) {
            return $produto;
        }
    }

    /**
     * @param string $comprador
     * @param string $produto
     * @param integer $produto_id
     * @param string $photo
     * @param [type] $valor
     * @param integer $unidades
     * @param string $descricao
     * @return boolean
     */
    public function compraProduto(string $comprador, string $produto, int $produto_id, string $photo, $valor, int $unidades, string $descricao): bool
    {
        $query = $this->connect->prepare("INSERT INTO produtos_adquiridos(cliente_comprador, produto, produto_id ,photo , valor_produto, unidades_compradas, descricao) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $query->bindParam(1, $comprador);
        $query->bindParam(2, $produto);
        $query->bindParam(3, $produto_id);
        $query->bindParam(4, $photo);
        $query->bindParam(5, $valor);
        $query->bindParam(6, $unidades);
        $query->bindParam(7, $descricao);


        if ($query->execute()) {
            return true;
        }
        return false;
    }


    public function checkQnt(string $comprador, string $produto)
    {
        $query = $this->connect->prepare("SELECT * FROM produtos_adquiridos WHERE cliente_comprador = ? AND produto = ?");
        $query->bindParam(1, $comprador);
        $query->bindParam(2, $produto);

        if ($query->rowCount() > 0) {
            return true;
        }
        return false;
    }


    public function getByClientes(string $cliente): iterable|object
    {
        $query = $this->connect->prepare("SELECT * FROM produtos_adquiridos WHERE cliente_comprador = ?");
        $query->bindParam(1, $cliente);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}
