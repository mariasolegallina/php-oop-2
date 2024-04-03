<?php
class Food extends Product
{
    public $weight;
    public $ingredients;

    /**
     * __construct
     *
     * @param  string $_weight
     * @param  string[] $_ingredients
     */
    function __construct($_weight, $_ingredients)
    {
        $this->weight = $_weight;
        $this->ingredients = $_ingredients;
    }
}
