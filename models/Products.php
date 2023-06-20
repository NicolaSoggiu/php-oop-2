<?php

class Products
{
    private string $animal;
    private string $price;
    private string $title;
    private string $urlImg;

    public function __construct(string $animal, string $price, string $title, string $urlImg)
    {
        $this->animal = $animal;
        $this->price = $price;
        $this->title = $title;
        $this->urlImg = $urlImg;
    }

    public function getName()
    {
        return $this->animal;
    }

    public function setName($animal)
    {
        $this->animal = $animal;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->price = $title;
    }

    public function getUrlImg()
    {
        return $this->urlImg;
    }

    public function setUrlImg($urlImg)
    {
        $this->price = $urlImg;
    }
}
