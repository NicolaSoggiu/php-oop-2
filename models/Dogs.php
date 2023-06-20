<?php

include "product.php";

class Dogs extends Products
{
    private $type;

    public function __construct($name, $price, $type)
    {
        parent::__construct($name, $price);
        $this->type = $type;
    }

    function getType()
    {
        return $this->type;
    }

    function setType()
    {
        return $this->type;
    }
}