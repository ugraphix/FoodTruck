<?php

/**
 * Created by PhpStorm.
 * User: Ekogoca
 * Date: 01/31/2017
 * Time: 6:04 PM
 */
class Food
{
    //class fields
    public $name = "";
    public $description = "";
    public $price = 0;
    public $quantity = 0;
    public $toppings = array();
    //create class level property TAX
    public static $TAX = 0.9;

    //constructor
    public function __construct($name,$description,$quantity = 0,$price = 0, $toppings = array())
    {
        $this->name = $name;
        $this->description = $description;
        $this->quantity = $quantity;
        $this->price = $price;
        $this->toppings = $toppings;
    }

    //methods
    public function CalculateTotal(){
        //@todo implement method
    }
}