<?php




$groceries_controller = new GroceriesController($database);


$groceries = $groceries_controller->getAll();


$shoppingList = [];
foreach ($groceries as $item) {
    array_push($shoppingList, new GroceryListItem($item->id, $item->name, $item->quantity, $item->price));
}


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    foreach ($shoppingList as $item) {
        $item->setQuantity(floatval($_POST["productQuantity-" . $item->id]));
        $query->changeValue('groceries', $item->id, 'quantity', $item->quantity);
    }
}

require 'views/index.view.php';
