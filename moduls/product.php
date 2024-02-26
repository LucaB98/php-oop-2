<?php

class Product
{
    public $price;
    public $brand;
    public $type;

    public function __construct($brand, $type)
    {
        $this->brand = $brand;
        $this->type = $type;
    }
}