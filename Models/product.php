<?php
require_once __DIR__ . '/dimension.php';
class Product
{
    use Dimension;

    protected $name;
    protected $price;
    protected $img;
    protected $category;

    // NAME
    public function setName($_name)
    {
        if (strlen($_name) < 30) {
            $this->name = $_name;
        }
    }

    public function getName()
    {
        return urlencode($this->name);
    }


    // PRICE
    public function setPrice($_price)
    {
        if (strlen($_price) > 0) {
            $this->price = $_price;
        }
    }

    public function getPrice()
    {
        return $this->price;
    }


    // IMAGE NAME
    public function setImg($_img)
    {

        $this->img = $_img;
    }

    public function getImg()
    {
        return $this->img;
    }


    // category
    public function setCategory($_category)
    {

        $this->category = $_category;
    }

    public function getCategory()
    {
        return $this->category;
    }
}
