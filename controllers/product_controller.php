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
}
