<?php

require LUCID . 'routing.php';

return [
	route() => 'page',
	route('home') => 'page',
	route('products') => 'product',
	route('products', '(?<product_id>\d+)') => 'product@show',
	route('product_brands') => 'product_brand',
	route('product_brands', '(?<product_brand_id>\d+)') => 'product_brand@show',
];
