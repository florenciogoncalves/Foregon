<?php
include_once __DIR__ . "/../../../_app/models/Model.php";

class blogModel extends Model
{
    public function __construct()
    {
        parent::__construct('blog', ['photo_post', 'titulo', 'escritor', 'texto', 'referencia']);
    }

    /**
     * @param integer $LIMIT
     * @return iterable|object
     */
    public function showBlogPosts(bool $order = false, int $LIMIT = 9)
    {
        if ($order) {
            return $this->find()->order('id DESC')->limit($LIMIT)->fetch(true);
        }
        return $this->find()->limit($LIMIT)->fetch(true);
    }

    /**
     * @param integer $id
     * @return iterable|object
     */
    public function getPost(int $id)
    {
        $filterID = filter_var($id, FILTER_VALIDATE_INT);
        return $this->findById($id);
    }

    /**
     * @return integer
     */
    public function countPosts(): int
    {
        return $this->find()->count();
    }

    /**
     * @param integer $id
     * @param integer $LIMIT
     * @return iterable|object
     */
    public function getMorePosts(string $author, int $id, int $LIMIT = 3)
    {
        return $this->find("escritor = :escritor AND id != :id", "escritor={$author}&id={$id}")->order(rand(1, $this->count()))->limit($LIMIT)->fetch(true);
    }
}
