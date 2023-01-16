<?php

require __DIR__ . "/../core/connect.php";

class User extends connect
{
    public $logged = null;

    public function createUserAccount(string $nome, string $email, string $celular, string $cpf, string $senha): bool
    {
        $query = $this->connect->prepare("INSERT INTO users (nome, email, celular, cpf,senha) VALUES (?, ?, ?, ?, ?)");
        $query->bindParam(1, $nome);
        $query->bindParam(2, $email);
        $query->bindParam(3, $celular);
        $query->bindParam(4, $cpf);
        $query->bindParam(5, $senha);
        if ($query->execute()) {
            return true;
        }
        return false;
    }

    public function getUserPassword(string $email): bool|iterable|object
    {
        $query = $this->connect->prepare("SELECT senha FROM users WHERE email = ?");
        $query->bindParam(1, $email);
        $query->execute();
        if ($query->rowCount() > 0) {
            return $query->fetch(PDO::FETCH_ASSOC);
        }
        return false;
    }

    public function login(string $email, string $senha): bool|User
    {
        $query = $this->connect->prepare("SELECT * FROM users WHERE email = ? AND senha = ?");
        $query->bindParam(1, $email);
        $query->bindParam(2, $senha);
        $query->execute();

        $fetch = $query->fetch(PDO::FETCH_ASSOC);
        $this->logged = $fetch['nome'];


        if ($query->rowCount() > 0) {
            return true;
        }
        return false;
    }

    public function sessionUsername(): string
    {
        return $this->logged;
    }
    public function updateStore(string $descricao, int $valor, string $photo, int $id): bool
    {
        $query = $this->connect->prepare("UPDATE produtos SET descricao_produto = ?, valor = ?, foto_produto = ? WHERE id = ?");
        $query->bindParam(1, $descricao);
        $query->bindParam(2, $valor);
        $query->bindParam(3, $photo);
        $query->bindParam(4, $id);

        if ($query->execute()) {
            return true;
        }
        return false;
    }

    public function oldPic(int $id)
    {
        $query = $this->connect->prepare("SELECT foto_produto FROM produtos WHERE id = ?");
        $query->bindParam(1, $id);
        $query->execute();

        foreach ($query->fetch(PDO::FETCH_ASSOC) as $pic) {
            return $pic;
        }
    }
}
