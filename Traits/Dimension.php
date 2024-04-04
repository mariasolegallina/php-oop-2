<?php

trait Dimension
{
    public $height;
    public $length;
    public $depth;

    /**
     * __construct
     *
     * @param  float $_height
     * @param  float $_length
     * @param float $_depth
     */
    function __construct($_height, $_length, $_depth)
    {
        $this->height = $_height;
        $this->length = $_length;
        $this->depth = $_depth;
    }
}
