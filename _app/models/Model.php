<?php

require_once __DIR__ . "/../core/connect.php";

abstract class Model extends connect
{

    /**
     * @var string
     */
    protected $query;

    /**
     * @var string
     */
    protected $params;

    /**
     * @var string
     */

    protected $order;

    /**
     * @var int
     */

    protected $limit;

    /**
     * @var string
     */
    protected $entity;


    /** @var array $entity database table */
    protected $required;


    public function __construct(string $entity, array $required)
    {
        parent::__construct();
        $this->entity = $entity;
        $this->required = $required;
    }


    /**
     * @return null|object
     */
    public function data(): ?object
    {
        return $this->data;
    }

    /**
     * @return \PDOException
     */
    public function fail(): ?\PDOException
    {
        return $this->fail;
    }

    /**
     * @param null|string $terms
     * @param null|string $params
     * @param string $columns
     * @return Model|mixed
     */

    public function find(?string $terms = null, ?string $params = null, string $colums = "*")
    {
        if ($terms) {
            $this->query = "SELECT {$colums} FROM {$this->entity} WHERE {$terms}";
            parse_str($params, $this->params);
            return $this;
        }

        $this->query = "SELECT {$colums} FROM {$this->entity}";
        return $this;
    }

    /**
     * @param int $id
     * @param string $columns
     * @return null|mixed|Model
     */
    public function findById(int $id, string $colums = "*"): ?Model
    {
        $find = $this->find("id = :id", "id={$id}", $colums);
        return $find->fetch();
    }

    /**
     * @param string $columnOrder
     * @return Model
     */
    public function order(string $columnOrder): Model
    {
        $this->order = " ORDER BY {$columnOrder}";
        return $this;
    }

    /**
     * @param int $limit
     * @return Model
     */
    public function limit(int $limit): Model
    {
        $this->limit = " LIMIT {$limit}";
        return $this;
    }

    /**
     * @param bool $all
     * @return null|array|mixed|Model
     */

    public function fetch(bool $all = false)
    {
        try {
            $stmt = $this->connect->prepare($this->query . $this->order . $this->limit);
            $stmt->execute($this->params);

            if (!$stmt->rowCount()) {
                return null;
            }
            if ($all) {
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            }

            return $stmt->fetchObject(static::class);
        } catch (\PDOException $exception) {
            return null;
        }
    }

    /**
     * @param string $key
     * @return int
     */


    public function count(string $key = 'id'): int
    {
        $stmt = $this->connect->prepare($this->query);
        $stmt->execute($this->params);
        return $stmt->rowCount();
    }

    protected function create(array $data): ?int
    {
        try {

            $colums = implode(", ", array_keys($data));

            $values = ":" . implode(", :", array_keys($data));

            $stmt = $this->connect->prepare("INSERT INTO {$this->entity} ({$colums}) VALUES ({$values})");
            $stmt->execute($this->filter($data));
            return $this->connect->lastInsertId();
        } catch (\PDOException $exception) {
            return null;
        }
    }


    protected function update(array $data, string $terms, string $params): ?int
    {
        try {

            $dataSet = [];
            foreach ($data as $bind => $value) {
                $dataSet[] = "{$bind} = : {$bind}";
            }
            $dataSet = implode(", ", $dataSet);
            parse_str($params, $params);


            $stmt = $this->connect->prepare("UPDATE {$this->entity} SET {$dataSet} WHERE {$terms}");
            $stmt->execute($this->filter(array_merge($data, $params)));
            return ($stmt->rowCount() ?? 1);
        } catch (\PDOException $exception) {
            return null;
        }
    }


    /**
     * @param string $terms
     * @param null|string $params
     * @return bool
     */
    public function delete(string $terms, ?string $params): bool
    {
        try {
            $stmt = $this->connect->prepare("DELETE FROM {$this->entity} WHERE {$terms}");
            if ($params) {
                parse_str($params, $params);
                $stmt->execute($params);
                return true;
            }

            $stmt->execute();
            return true;
        } catch (\PDOException $exception) {

            return false;
        }
    }



    public function save(): bool
    {
        if (!$this->required()) {
            $this->message->warning("Preencha todos os campos para continuar");
            return false;
        }

        /** Update */
        if (!empty($this->id)) {
            $id = $this->id;
            $this->update($this->safe(), "id = :id", "id={$id}");
            if ($this->fail()) {
                $this->message->error("Erro ao atualizar, verifique os dados");
                return false;
            }
        }

        /** Create */
        if (empty($this->id)) {
            $id = $this->create($this->safe());
            if ($this->fail()) {
                $this->message->error("Erro ao cadastrar, verifique os dados");
                return false;
            }
        }

        $this->data = $this->findById($id)->data();
        return true;
    }




    /**
     * @return array|null
     */
    protected function safe(): ?array
    {
        $safe = (array)$this->data;
        foreach ($this->protected as $unset) {
            unset($safe[$unset]);
        }
        return $safe;
    }

    /**
     * @param array $data
     * @return array|null
     */
    private function filter(array $data): ?array
    {
        $filter = [];
        foreach ($data as $key => $value) {
            $filter[$key] = (is_null($value) ? null : filter_var($value, FILTER_DEFAULT));
        }
        return $filter;
    }

    /**
     * @return int
     */
    public function lastId(): int
    {
        return $this->connect->query("SELECT MAX(id) as maxId FROM {$this->entity}")->fetch()->maxId + 1;
    }

    /**
     * @return bool
     */
    protected function required(): bool
    {
        $data = (array)$this->data();
        foreach ($this->required as $field) {
            if (empty($data[$field])) {
                return false;
            }
        }
        return true;
    }
}
