<?php

require_once __DIR__ . "/Product.php";

class Toy extends Product
{

    protected $material;

    public function setMaterial($_material)
    {
        if (strlen($_material) < 30) {
            $this->material = $_material;
        }
    }
    public function getMaterial()
    {
        return $this->material;
    }
}
