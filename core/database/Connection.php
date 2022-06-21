<?php
class Connection
{
    public static function connect($config)
    {
        try {
            return new PDO(
                'mysql:host=' . $config['host'] . ';port=' . $config['port'] . ';dbname=' . $config['name'] . ";",
                $config['user'],
                $config['password'],
                $config['options']

            );
        } catch (PDOException $e) {
            die('Connection failed: ' . $e->getMessage());
        }
    }
}
