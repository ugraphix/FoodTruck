<?php
require 'food.php';
include 'includes/header.php';
echo '<pre>';
echo var_dump($_POST);
echo '</pre>';

//loop through the $_POST array and create an array of Food objects the user ordered
for ($i = 0; $i < count($_POST["items"]); $i++) {

    //store object parameters from the $_POST array into variables
    $type = $_POST["items"][$i];
    $quantity = $_POST["quantity"][$i];
    //check if toppings were selected
    if(isset($_POST["topping" . $i])){
        $toppings = $_POST["topping" . $i];
    }
    else{
        $toppings = [];
    }

    /** @var array $foodOrder stores the ordered food items*/
    $foodOrder[] = new Food($type, $quantity, $toppings);

}

echo '<pre>';
echo var_dump($foodOrder);
echo '</pre>';

include 'includes/footer.php';