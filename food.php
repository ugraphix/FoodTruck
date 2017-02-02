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
    public $type;
    public $name;
    public $description;
    public $price;
    public $quantity;
    //user selected additions
    public $toppings = array();
    //available extras(toppings) per food type
    public  $extras = array();
    //create class level property TAX
    public static $TAX = 0.9;
    private static $TOPPINGS_FEE = 0.75;

    //constructor
    public function __construct($type,$quantity = 0,$toppings = array())
    {
        $this->type = $type;
        $this->quantity = $quantity;
        $this->toppings = $toppings;
        $this->SetProperties($type);
    }

    //methods
    /**
     * @param $type
     */
    private function SetProperties($type){
    switch ($type) {
        case "pizza":
            $this->name = "Italian Pizza";
            $this->description ="Delicious taste of Italy,with fresh mozzarella and olive oil";
            $this->price = 7;
            $this->extras = ["Peppers", "Mushrooms", "Tomatoes", "Pesto"];
            break;
        case "burrito":
            $this->name = "Mexican Burrito";
            $this->description ="¡Ay, caramba! Straight from burrito heaven to your table";
            $this->price = 5;
            $this->extras = ["Cilantro", "Sour Cream", "Guacamole", "Salsa"];
            break;
        case "salad":
            $this->name = "Greek Salad";
            $this->description ="Fresh like a summer breeze over the Mediterranean";
            $this->price = 4.5;
            $this->extras = ["Olives", "Feta Cheese", "Oregano", "Onions"];
            break;
        case "curry":
            $this->name = "Indian Curry";
            $this->description ="Spicy and rich vegetable curry, simply irresistible";
            $this->price = 7.25;
            $this->extras = ["Hot Peppers", "Coconut Chutney", "Raita"];
            break;
        default:
            $this->name = "Name not set";
            $this->description ="No description";
            $this->price = 0;
            $this->extras = [];
            break;
    }
}
    public function CalculateTotal(){
        //@todo implement method
    }



}