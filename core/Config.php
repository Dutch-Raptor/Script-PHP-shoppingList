<?php

return [
    'database' => [
        'host' => '172.26.88.2',
        'port' => 3306,
        'name' => 'shoppinglist',
        'user' => 'testuser',
        'password' => 'test_password',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ],
    ]
];
