<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>Food Pantry App</h1>
<a href="root.php/products">See all products</a><br>
<a href="root.php/brands">See all product brands</a><br>
<h2>Subtract quantity from storage</h2>
<form action="root.php/subtract" method="POST">
    <label>Amount: </label><input type="number" name="amount"><br>
    <br>
    <input type="submit">
</form>
<h2>Products with least items in storage</h2>
<?php foreach ($products_with_lowest_storage as $product): ?>
    <a href="root.php/products/<?= $product->product_id ?>">
        <?= $product->product_name ?>: <?= $product->in_stock ?>
    </a>
    <br>
<?php endforeach ?>
</body>
</html>
