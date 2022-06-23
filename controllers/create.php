<?php

require 'controllers/GroceriesController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['name'] === '' || $_POST['price'] === '' || $_POST['quantity'] === '') {
        $error = 'Please fill in all fields.';
    } else {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $total = $price * $quantity;
        $app['database']->addRow(
            'groceries',
            "name, price, quantity",
            "'$name', '$price', '$quantity'"
        );
        header('Location: /groceries');
    }
}

require 'views/create.view.php';
