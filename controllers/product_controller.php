<?php

require LUCID . 'view.php';

require ROOT . '/models/Product.php';
require ROOT . '/models/ProductBrand.php';

class ProductController {
	function index() {
		view('Product/index.php', ['products' => Product::all()]);
	}

    function show(int $product_id) {
        view('Product/show.php', [
            'product' => Product::find(['product_id' => $product_id]),
            'brands' => ProductBrand::where(['product_id' => $product_id]),
        ]);
	}

    function new() {
        view('Product/new.php');
    }

    function create() {
        $product = Product::new([
            'product_name' => $_POST['product_name'],
            'max_storage' => intval($_POST['max_storage']),
        ]);
        header("Location: ./{$product->product_id}");
    }
}
