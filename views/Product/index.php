<!DOCTYPE html>
<html>
<head>
</head>
<body>
<a href="../root.php">Home</a>
<h1>All Product</h1>
<?php foreach ($products as $product): ?>
    <a href="products/<?= $product->product_id ?>">
        <?= $product->product_name ?>
    </a>
    <br>
<?php endforeach ?>
<hr>
<a href="products/new">Add a new product</a>
</body>
</html>
