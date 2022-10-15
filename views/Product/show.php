<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1><?= $product->product_name ?></h1>
<h2>Brands:</h2>
<?php foreach ($brands as $brand): ?>
    <a href="../brands/<?= $brand->product_brand_id ?>">
        <?= $brand->brand_name ?>
    </a>
    <br>
<?php endforeach ?>
<a href="../products">Back to all products</a>
<br>
</body>
</html>
