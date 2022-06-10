<?php

include 'functions.php';

class GroceryListItem
{
    public $id;
    public $name;
    public $quantity;
    public $price;

    public function __construct($id, $name, $quantity, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->quantity = $quantity;
        $this->price = $price;
    }

    public function getTotal()
    {
        return $this->quantity * $this->price;
    }

    public function getTotalFormatted()
    {
        return '$' . number_format($this->getTotal(), 2);
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
}


$shoppingListDB = new Database('shoppinglist');

$groceries = $shoppingListDB->getAll('groceries');

$shoppingList = [];
foreach ($groceries as $item) {
    array_push($shoppingList, new GroceryListItem($item->id, $item->name, $item->quantity, $item->price));
}


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    foreach ($shoppingList as $item) {
        $item->setQuantity(floatval($_POST["productQuantity-" . $item->id]));
        $shoppingListDB->changeValue('groceries', $item->id, 'quantity', $item->quantity);
    }
}







require "index.view.php";
