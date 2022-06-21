<?php

class QueryBuilder
{
    public function __construct($database)
    {
        $this->database = $database;
    }

    public function getAll($table)
    {
        $statement = $this->database->prepare("SELECT * FROM $table");
        try {
            $statement->execute();
        } catch (PDOException $e) {
            die('Query failed: ' . $e->getMessage());
        }
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function changeValue($table, $id, $column, $value)
    {
        $statement = $this->database->prepare("UPDATE $table SET $column = :value WHERE id = :id");
        $statement->bindParam(':id', $id);
        $statement->bindParam(':value', $value);
        try {
            $statement->execute();
        } catch (PDOException $e) {
            die('Query failed: ' . $e->getMessage());
        }
    }

    public function getByFilter($table, $filter)
    {
        $statement = $this->database->prepare("SELECT * FROM $table WHERE $filter");
        try {
            $statement->execute();
        } catch (PDOException $e) {
            die('Query failed: ' . $e->getMessage());
        }
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function addRow($table, $column, $values)
    {
        $statement = $this->database->prepare("INSERT INTO $table ($column) VALUES ($values)");
        try {
            $statement->execute();
        } catch (PDOException $e) {
            die('Query failed: ' . $e->getMessage());
        }
    }

    public function deleteRow($table, $filter)
    {
        $statement = $this->database->prepare("DELETE FROM $table WHERE $filter");
        try {
            $statement->execute();
        } catch (PDOException $e) {
            die('Query failed: ' . $e->getMessage());
        }
    }
}
