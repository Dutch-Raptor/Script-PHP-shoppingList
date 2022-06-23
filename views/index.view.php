<!DOCTYPE html>
<html lang="en">

<?php
$title = "Groceries";
require 'views/components/head.view.php';
?>

<body>

    <header>
        <?php require 'views/components/navigation.view.php'; ?>
    </header>
    <div class="container">

        <h1>Shopping List</h1>
        <form action="/groceries" method="post">
            <table>
                <thead>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Amount</th>
                    <th>Total</th>
                </thead>
                <tbody>

                    <?php foreach ($shoppingList as $item) : ?>

                        <tr>
                            <td><?= $item->name ?></td>
                            <td class="productPrice"><?= $item->price ?></td>
                            <td><input type="number" step="any" name="productQuantity-<?= $item->id ?>" class="productQuantity" placeholder="0" value=<?= $item->quantity ?>></td>
                            <td class="productTotalCost"><?= $item->getTotalFormatted() ?></td>
                        </tr>

                    <?php endforeach; ?>
                    <tr>
                        <td colspan="3">Total</td>
                        <td class="totalCost">$<?= number_format($totalCost, 2) ?></td>
                    </tr>
                </tbody>
                <tfoot></tfoot>
            </table>
            <input type="submit" value="Update">
        </form>
    </div>
    
<?php
require 'views/components/footer.view.php';
?>
</body>

</html>