<?php

class Product
{
    protected $id;
    protected $name;
    public $price;

    public function __construct($id, $name, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function get_price()
    {
        return $this->price;
    }
}