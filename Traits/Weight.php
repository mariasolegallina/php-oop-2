<?php

trait Weight
{
    public $weight;

    /**
     * __construct
     *
     * @param  string $_weight
     */
    function __construct($_weight)
    {
        $this->weight = $_weight;
    }
}
