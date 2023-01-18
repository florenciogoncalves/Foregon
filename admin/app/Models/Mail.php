<?php

require __DIR__ . "/../../../_app/core/connect.php";
include __DIR__ . "/../../../_app/boot/helpers.php";

class MailSupport extends connect
{

    public function is_User(string $email): bool
    {
        $query = $this->connect->prepare("SELECT email FROM users WHERE email = ?");
        $query->bindParam(1, $email);
        $query->execute();

        if ($query->rowCount() > 0) {
            return true;
        }
        return false;
    }

    public function saveVerificationCode(string $email, int $code): bool
    {
        $expire = date('H:i:s', strtotime("+10 minutes"));


        $query = $this->connect->prepare("INSERT INTO reset_password (email, code, expire_at) VALUES (?, ?, ?)");
        $query->bindParam(1, $email);
        $query->bindParam(2, $code);
        $query->bindParam(3, $expire);

        if ($query->execute()) {
            return true;
        }
        return false;
    }

    public function getUser(string $email): string
    {
        $query = $this->connect->prepare("SELECT nome FROM users WHERE email = ?");
        $query->bindParam(1, $email);
        $query->execute();
        foreach ($query->fetch(PDO::FETCH_ASSOC) as $user) {
            return $user;
        }
    }

    public function getVerificationCode(string $email)
    {
        $query = $this->connect->prepare("SELECT code FROM reset_password WHERE email = ?");
        $query->bindParam(1, $email);
        $query->execute();
        if ($query->rowCount() > 0) {
            foreach ($query->fetch(PDO::FETCH_ASSOC) as $code) {
                return $code;
            }
            return false;
        }
    }




    public function hasCode(string $email)
    {
        $query = $this->connect->prepare("SELECT code FROM reset_password WHERE email = ?");
        $query->bindParam(1, $email);
        $query->execute();
        if ($query->rowCount() > 0) {
            return true;
        }
        return false;
    }


    public function verifyValidation(string $email)
    {
        $now = date('H:i:s');
        $query = $this->connect->prepare("SELECT expire_at FROM reset_password WHERE email = ?");
        $query->bindParam(1, $email);
        $query->execute();


        if ($query->rowCount() > 0) {

            foreach ($query->fetch(PDO::FETCH_ASSOC) as $data) {

                $expire_at = getHour($data);
                $timeNow = getHour($now);



                if ($timeNow >= $expire_at) {
                    if ($this->delete($email)) {
                        return true;
                    }
                    return false;
                }
            }
            // echo "Já foi enviado um código para o e-mail referido!";
        }
    }

    public function delete(string $email)
    {
        $query = $this->connect->prepare("DELETE FROM reset_password WHERE email = ?");
        $query->bindParam(1, $email);
        if ($query->execute()) {
            return true;
        }
        return false;
    }

    public function updatePassword(
        string $password,
        string $email
    ): bool {
        $query = $this->connect->prepare("UPDATE users SET senha = ? WHERE email = ?");
        $query->bindParam(1, $password);
        $query->bindParam(2, $email);

        if ($query->execute()) {
            return true;
        }
        return false;
    }
}
