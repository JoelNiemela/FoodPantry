<?php

require LUCID . 'routing.php';

return [
	route() => 'page',
	route('home') => 'page',
	route('subtract') => 'page@subtract',
	route('products') => 'product',
	route('products', 'new') => 'product@new',
	route('products', 'create') => 'product@create',
	route('products', '(?<product_id>\d+)') => 'product@show',
	route('products', '(?<product_id>\d+)', 'restock') => 'product@restock',
	route('brands') => 'product_brand',
	route('brands', '(?<product_brand_id>\d+)') => 'product_brand@show',
	route('brands', 'new') => 'product_brand@new',
	route('brands', 'create') => 'product_brand@create',
];
