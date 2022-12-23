<?php

require __DIR__ . "/../core/connect.php";

class User extends connect
{
    public $logged = null;

    public function createUserAccount(string $nome, string $email, string $celular, string $senha): bool
    {
        $query = $this->connect->prepare("INSERT INTO users (nome, email, celular, senha) VALUES (?, ?, ?, ?)");
        $query->bindParam(1, $nome);
        $query->bindParam(2, $email);
        $query->bindParam(3, $celular);
        $query->bindParam(4, $senha);
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
}
