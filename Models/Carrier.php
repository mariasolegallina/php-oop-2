<?php

require_once __DIR__ . '/Product.php';

class Carrier extends Product
{
    public $height;
    public $length;
    public $depth;

    /**
     * __construct
     *
     * @param  string $_name
     * @param  float $_price
     * @param  string $_image
     * @param  Category $_category
     * @param  float $_height
     * @param  float $_length
     * @param float $_depth
     */
    function __construct($_name, $_price, $_image, Category $_category, $_height, $_length, $_depth)
    {
        $this->height = $_height;
        $this->length = $_length;
        $this->depth = $_depth;
    }
}
