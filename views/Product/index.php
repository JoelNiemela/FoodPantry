<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>All Product</h1>
<?php foreach ($products as $product): ?>
    <a href="products/<?= $product->product_id ?>">
        <?= $product->product_name ?>
    </a>
    <br>
<?php endforeach ?>
</body>
</html>