<?php
class Food extends Product
{
    public $ingredients;

    /**
     * __construct
     *
     * @param  string $_name
     * @param  float $_price
     * @param  string $_image
     * @param  Category $_category
     * @param  string[] $_ingredients
     */
    function __construct($_name, $_price, $_image, Category $_category, $_ingredients)
    {
        $this->ingredients = $_ingredients;
    }
}
