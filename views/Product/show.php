<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1><?= $product->product_name ?></h1>
<label>Max Storage: </label><?= $product->max_storage ?><br>
<label>In Stock: </label><?= $product->in_stock ?><br>
<h2>Stock items:</h2>
<form action="<?= $product->product_id ?>/stock" method="POST">
    <label>Amount: </label><input type="number" name="amount"><br>
    <br>
    <input type="submit">
</form>
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
