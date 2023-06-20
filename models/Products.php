<?php

class Products
{
    private string $name;
    private string $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setName()
    {
        return $this->name;
    }


    public function setPrice()
    {
        return $this->price;
    }
}
