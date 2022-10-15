<?php

require LUCID . 'view.php';

require ROOT . '/models/Product.php';

class ProductController {
	function index() {
		view('Product/index.php', ['products' => Product::all()]);
	}
}
