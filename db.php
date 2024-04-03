<?php
require __DIR__ . '/Models/Category.php.php';
require __DIR__ . '/Models/Product.php';

// Categories
$forCats = new Category("Gatti", "");
$forDogs = new Category("Cani", "");


// Products
$products = [
    new Product("Cuscino verde", 23, "/img/product-8.jpg", $forCats),

];
