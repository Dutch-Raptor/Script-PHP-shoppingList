<?php

return [
    'database' => [
        'host' => 'localhost',
        'port' => 3306,
        'name' => 'shoppinglist',
        'user' => 'testuser',
        'password' => 'test_password',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ],
    ]
];
