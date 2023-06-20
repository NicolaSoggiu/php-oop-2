<?php

include "product.php";


class Accessories extends Products
{

    private string $description;
    private string $utility;

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setUtiliy($utility)
    {
        $this->utility = $utility;
    }

    public function getUtility()
    {
        return $this->utility;
    }
}
