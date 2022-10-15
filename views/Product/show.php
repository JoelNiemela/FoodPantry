<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1><?= $product->product_name ?></h1>
<label>Max Storage: </label><?= $product->max_storage ?>
<h2>Brands:</h2>
<?php foreach ($brands as $brand): ?>
    <a href="../brands/<?= $brand->product_brand_id ?>">
        <?= $brand->brand_name ?>
    </a>
    <br>
<?php endforeach ?>
<br>
<a href="../brands/new?product_id=<?= $product->product_id ?>">Add a new brand for this product</a>
<hr>
<a href="../products">Back to all products</a>
<br>
</body>
</html>
