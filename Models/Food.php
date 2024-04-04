<?php
class Food extends Product
{
    public $weight;
    public $ingredients;

    /**
     * __construct
     *
     * @param  string $_name
     * @param  float $_price
     * @param  string $_image
     * @param  Category $_category
     * @param  string $_weight
     * @param  string[] $_ingredients
     */
    function __construct($_name, $_price, $_image, Category $_category, $_weight, $_ingredients)
    {
        $this->weight = $_weight;
        $this->ingredients = $_ingredients;
    }
}
