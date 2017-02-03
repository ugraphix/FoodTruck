<?php
require 'food.php';
include 'includes/header.php';
//echo '<pre>';
//echo var_dump($_POST);
//echo '</pre>';

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

//echo '<pre>';
//echo var_dump($foodOrder);
//echo '</pre>';

//create the order summary showing all the items and toppings ordered,
//the subtotal for each item, and a cumulative total cost due.

foreach ($foodOrder as $food) {
    echo '<div class = "orderSummary menuItem col-md-6 col-md-offset-3">
              
              <h5 class="foodName">' . $food->name . '</h5>
              <p class="foodName cost">$' . $food->CalculatePerItemSubtotal() . ' </p>
             
              <p>Base price:</p>
              <p class="cost">$' . $food->price . ' </p>
              <p>+' . implode(", ", $food->toppings) . ' </p>
              <p class="cost">$' . $food->CalculateToppingsCost() . ' </p>
              <p>Tax (9.6%)</p>
              <p class="cost">$' . $food->CalculateTax() . ' </p>
              <hr>
              <p>Subtotal:</p>
              <p class="cost">$' . $food->CalculatePerItemSubtotal() . ' </p>
              
              </div>' ;
}



include 'includes/footer.php';