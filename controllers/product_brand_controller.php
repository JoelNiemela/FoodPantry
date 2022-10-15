<?php

require LUCID . 'view.php';

require ROOT . '/models/ProductBrand.php';

class ProductBrandController {
	function index() {
		view('ProductBrand/index.php', ['brands' => ProductBrand::all()]);
	}

    function show(int $product_brand_id) {
        view('ProductBrand/show.php', [
            'brand' => ProductBrand::find(['product_brand_id' => $product_brand_id]),
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
