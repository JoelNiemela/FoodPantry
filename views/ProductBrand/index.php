<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>All Brands</h1>
<?php foreach ($brands as $brand): ?>
    <a href="brands/<?= $brand->product_brand_id ?>">
        <?= $brand->brand_name ?>
    </a>
    <br>
<?php endforeach ?>
</body>
</html>
