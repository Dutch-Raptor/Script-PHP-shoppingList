<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning PHP</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Shopping List</h1>
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
               <td><?=$item["name"]?></td>
               <td class="productPrice"><?=$item["price"]?></td>
               <td><input type="number" name="productQuantity" class="productQuantity" placeholder="0" value=<?=$item["quantity"]?>></td>
               <td class="productTotalCost"><?=$item["price"] * $item["quantity"]?></td>
           </tr>

              <?php endforeach; ?>
       </tbody>
       <tfoot></tfoot>
   </table>
</body>

</html>