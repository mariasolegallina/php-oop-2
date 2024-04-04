<?php
require_once './Models/Category.php';
require_once './Models/Product.php';
require_once './Models/Food.php';
require_once './Models/Carrier.php';

// Categories
$forCats = new Category("Gatti", "fa-cat");
$forDogs = new Category("Cani", "fa-dog");


// Products
$products = [
    new Product("Cuscino verde", 23.99, "./img/product-8.jpg", $forCats),
    new Product("Trasportino", 42.50, "./img/product-16.jpg", $forCats, 30, 43, 32),
    new Product("Trasportino", 57.20, "./img/product-5.jpg", $forDogs, 50, 70, 64),
    new Product("Crocchette di manzo", 31.15, "./img/food-transparent-17.png", $forDogs, 5, "manzo"),

];
