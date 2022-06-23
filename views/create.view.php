<!DOCTYPE html>
<html lang="en">
<?php
require 'views/components/head.view.php';
?>

<body>
    <header>
        <?php require 'views/components/navigation.view.php'; ?>
    </header>
    <div class="container">
        <h1>
            Create a grocery list item!
        </h1>

        <form action="/groceries/create" method="post" class="create-item-form">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
            <label for="price">Price:</label>
            <input type="number" name="price" id="price" required>
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" id="quantity" required>
            <input type="submit" value="Create">
        </form>
    </div>
</body>

</html>