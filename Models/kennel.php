<?php

require_once __DIR__ . "/Product.php";

class Kennel extends Product
{

    protected $type;


    public function setType($_type)
    {
        if (strlen($_type) < 30) {
            $this->type = $_type;
        }
    }
    public function getType()
    {
        return $this->type;
    }
}
