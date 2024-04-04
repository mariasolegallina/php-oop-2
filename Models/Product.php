<?php

require_once __DIR__ . '/Category.php';

class Product
{
    public $name;
    public $price;
    public $image;
    public $category;


    /**
     * __construct
     *
     * @param  string $_name
     * @param  float $_price
     * @param  string $_image
     * @param  Category $_category
     */
    function __construct($_name, $_price, $_image, Category $category)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->image = $_image;
        $this->category = $category;
    }
}
