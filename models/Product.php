<?php

include_once __DIR__ . '/traits/Position.php';

class Product{
    use Position;

    public $name;
    public $price;

    function __construct( String $name, Float $price, Int $corsia, Int $scaffale){
        $this->name = $name;
        $this->price = $price;
        $this->corsia = $corsia;
        $this->scaffale = $scaffale;

        if ($this->price < 0) {
            throw new Exception('Price cannot be negative: you have entered a wrong value as price', 7823);
        }
    }
}