<?php

trait Dimension
{
    private $dimension;
    /**
     * Set the value of height
     *
     * @return  self
     */
    public function setDimension($_dimension)
    {
        if ($_dimension > 0) {
            $this->dimension = $_dimension;
        } else {
            throw new Exception("Info not available");
        }
    }


    /**
     * Get the value of height
     */
    public function getDimension()
    {
        if($this->dimension > 0 && $this->dimension < 100) {
            return 'Small';
        } else if($this->dimension >= 100 && $this->dimension <= 250) {
            return 'Medium';
        } else {
            return 'Big';
        }
    }
}
