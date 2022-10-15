<?php

require LUCID . 'routing.php';

return [
	route() => 'page',
	route('home') => 'page',
	route('products') => 'product',
	route('products', '(?<product_id>\d+)') => 'product@show',
];
