<?php

class MyDataBase
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost:3307;dbname=treino_db', 'root');
    }

    public function getUsers()
    {
        $user = $this->db->query('SELECT * FROM users');
        $linha = $user->fetchAll();
        return $linha;
    }

    public function createUser(string $username, string $password, string $email)
    {
        $sql = 'INSERT INTO users (username, password, email)
                VALUES (:username, :password, :email)';

        $result = $this->db->prepare($sql);
        $result->bindValue(':username', $username);
        $result->bindValue(':password', $password);
        $result->bindValue(':email', $email);
        $result->execute();
    }

    public function deleteUser(string $userId)
    {
        $sql = 'DELETE FROM users WHERE id=:userid';
        $result = $this->db->prepare($sql);
        $result->bindValue(':userid', $userId);
        $result->execute();
    }
}
