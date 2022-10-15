<?php

require LUCID . 'view.php';

require ROOT . '/models/Product.php';

class PageController {
    function index() {
        $products_with_lowest_storage = Product::all();
        usort($products_with_lowest_storage, function(Product $a, Product $b) {
           return $b->in_stock <=> $a->in_stock;
        });

        view('Page/home.php', [
            'products_with_lowest_storage' => $products_with_lowest_storage,
        ]);
	}

    function subtract() {
        foreach (Product::all() as $product) {
            $product->update([
                'in_stock' => max(0, $product->in_stock - intval($_POST['amount'])),
            ]);
        }
        header("Location: ..");
    }
}
