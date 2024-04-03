<?php
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
     * @param  int $_price
     * @param  string $_image
     * @param  Category $_category
     */
    function __construct($_name, $_price, $_image, Category $_category)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->image = $_image;
    }
}
