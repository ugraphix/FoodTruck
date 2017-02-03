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
    public static $TAX = 0.096;
    private static $TOPPINGS_FEE = 0.75;

    //constructor
    public function __construct($type,$quantity = 0,$toppings = array())
    {
        $this->type = $type;
        $this->quantity = $quantity;
        $this->toppings = $toppings;
        $this->SetProperties();
    }

    //methods

    /**
     *Sets the name, description, price and extras fields based on the food type
     */
    private function SetProperties(){
    switch ($this->type) {
        case "pizza":
            $this->name = "Italian Pizza";
            $this->description ="Delicious taste of Italy,with fresh mozzarella and olive oil";
            $this->price = 7.50;
            $this->extras = ["Peppers", "Mushrooms", "Tomatoes", "Pesto"];
            break;
        case "burrito":
            $this->name = "Mexican Burrito";
            $this->description ="¡Ay, caramba! Straight from burrito heaven to your table";
            $this->price = 5.25;
            $this->extras = ["Cilantro", "Sour Cream", "Guacamole", "Salsa"];
            break;
        case "salad":
            $this->name = "Greek Salad";
            $this->description ="Fresh like a summer breeze over the Mediterranean";
            $this->price = 4.50;
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

    /**
     * Calculates the cost of the added toppings
     * Counts the number of toppings selected and multiplies it by the base toppings fee
     * of 0.75 dollars per topping
     * @return string $toppingsCost formatted to two decimal places
     */
    public function CalculateToppingsCost(){
        $toppingsCost = count($this->toppings) * self::$TOPPINGS_FEE;
        return number_format($toppingsCost, 2);
    }

    public function CalculateTax() {
        $taxTotal = ($this->price + $this->CalculateToppingsCost()) * self::$TAX;
        return number_format($taxTotal, 2);
    }

    /**
     * Calculates the cost of ordering a food item
     * with toppings and tax included
     * @return string $subtotal formatted to two decimal places
     */
    public function CalculatePerItemSubtotal(){
        //@todo implement method
        $subtotal = ($this->price  + $this->CalculateToppingsCost())  * (self::$TAX + 1);
        return number_format($subtotal, 2);
    }





}