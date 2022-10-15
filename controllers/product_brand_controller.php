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
}
