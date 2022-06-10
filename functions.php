<?php

class Database
{
    public function __construct($name)
    {
        try {
            $this->db = new PDO('mysql:host=172.20.219.121;dbname=' . $name . ";", 'testuser', 'test_password');
        } catch (PDOException $e) {
            die('Connection failed: ' . $e->getMessage());
        }
    }

    public function getAll($table)
    {
        $statement = $this->db->prepare("SELECT * FROM $table");
        try {
            $statement->execute();
        } catch (PDOException $e) {
            die('Query failed: ' . $e->getMessage());
        }
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function changeValue($table, $id, $column, $value)
    {
        $statement = $this->db->prepare("UPDATE $table SET $column = :value WHERE id = :id");
        $statement->bindParam(':id', $id);
        $statement->bindParam(':value', $value);
        try {
            $statement->execute();
        } catch (PDOException $e) {
            die('Query failed: ' . $e->getMessage());
        }
    }
}
