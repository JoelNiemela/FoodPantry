<?php

require LUCID . 'view.php';

require ROOT . '/models/ProductBrand.php';
require ROOT . '/models/Product.php';

class ProductBrandController {
	function index() {
		view('ProductBrand/index.php', ['brands' => ProductBrand::all()]);
	}

    function show(int $product_brand_id) {
        $brand = ProductBrand::find(['product_brand_id' => $product_brand_id]);
        $product = Product::find(['product_id' => $brand->product_id]);
        view('ProductBrand/show.php', [
            'brand' => $brand,
            'product' => $product,
        ]);
	}

    function new() {
        view('ProductBrand/new.php', [
            'product_id' => $_GET['product_id'],
        ]);
	}

    function create() {
        $brand = ProductBrand::new([
            'brand_name' => $_POST['brand_name'],
            'product_id' => intval($_POST['product_id']),
        ]);
        header("Location: ./{$brand->product_brand_id}");
	}
}
