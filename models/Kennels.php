<?php

include "product.php";


class Kennels extends Products
{
    private string $materials;
    private string $breadth;

    public function setMaterials($materials)
    {
        $this->materials = $materials;
    }

    public function getMaterials()
    {
        return $this->materials;
    }

    public function setBreadth($breadth)
    {
        $this->breadth = $breadth;
    }

    public function getBreadth()
    {
        return $this->breadth;
    }
}