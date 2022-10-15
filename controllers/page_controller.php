<?php

require LUCID . 'view.php';

require ROOT . '/models/Product.php';

class PageController {
	function index() {
		view('Page/home.php');
	}

    function subtract() {
        foreach (Product::all() as $product) {
            $product->update([
                'in_stock' => $product->in_stock - intval($_POST['amount']),
            ]);
        }
        header("Location: ..");
    }
}
