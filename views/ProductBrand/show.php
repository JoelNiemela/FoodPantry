<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1><?= $brand->brand_name ?></h1>
<label>Product: </label><a href="../products/<?= $product->product_id ?>">
    <?= $product->product_name ?>
</a><br>
<hr>
<a href="../brands">Back to all brands</a>
<br>
</body>
</html>
