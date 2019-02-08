<?php

class product{

    public $name;
    public $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
}


$product1 = new product("aard", 55);

class klant{
    public $name;
    public $age;
    public $klantnummer;

    public function __construct($name, $age, $klantnummer)
    {
        $this->name = $name;
        $this->age = $age;
        $this->klantnummer = $klantnummer;
    }
}

$klant1 = new klant('anish', 18, 1232457676);

var_dump($klant1);