<?php
require __DIR__ . '/Models/Category.php';
require __DIR__ . '/Models/Product.php';

// Categories
$forCats = new Category("Gatti", "");
$forDogs = new Category("Cani", "");


// Products
$products = [
    new Product("Cuscino verde", 23.99, "./img/product-8.jpg", $forCats),
    new Product("Trasportino", 42.50, "./img/product-16", $forCats),
    new Product("Trasportino", 57.20, "./img/product-5", $forDogs),

];
