<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>Add a new product</h1>
<form action="create" method="POST">
    <label>Brand name:</label><br>
    <input type="text" name="brand_name">
    <br>
    <input type="hidden" name="product_id" value="<?= $product_id ?>">
    <br>
    <input type="submit">
</form>
<hr>
<a href="../products">Back</a>
</body>
</html>
