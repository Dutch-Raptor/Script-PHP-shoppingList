<?php


require 'controllers/GroceriesController.php';

$groceries_controller = new GroceriesController($app['database']);


$groceries = $groceries_controller->getAll();


$shoppingList = [];
foreach ($groceries as $item) {
    array_push($shoppingList, new GroceryListItem($item->id, $item->name, $item->quantity, $item->price));
}


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    foreach ($shoppingList as $item) {
        $item->setQuantity(floatval($_POST["productQuantity-" . $item->id]));
        $app['database']->changeValue('groceries', $item->id, 'quantity', $item->quantity);
    }
}

$totalCost = 0;
foreach ($shoppingList as $item) {
    $totalCost += $item->getTotal();
}

require 'views/index.view.php';
