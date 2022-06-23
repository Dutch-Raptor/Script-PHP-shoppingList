<?php



class GroceriesController {
    public function __construct($database) {
        $this->database = $database;
    }

    public function getAll() {
        return $this->database->getAll('groceries');
    }
}
class GroceryListItem {
    public $id;
    public $name;
    public $quantity;
    public $price;

    public function __construct($id, $name, $quantity, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->quantity = $quantity;
        $this->price = $price;
    }

    public function getTotal() {
        return $this->quantity * $this->price;
    }

    public function getTotalFormatted() {
        return '$' . number_format($this->getTotal(), 2);
    }

    public function setQuantity($quantity) {
        $this->quantity = $quantity;
    }
}
