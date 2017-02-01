<?php
require "food.php";
//we need to build the form dynamically, from existing objects

//instantiate initial objects representing the types of food offered
$pizza = new Food("Italian Pizza","Delicious taste of Italy,with fresh mozzarella and olive oil", 0,7,["Peppers", "Mushrooms", "Tomatoes", "Pesto"]);
$burrito = new Food("Mexican Burrito","¡Ay, caramba! Straight from burrito heaven to your table", 0,5,["Cilantro", "Sour Cream", "Guacamole", "Salsa"]);
$salad = new Food("Greek Salad","Fresh like a summer breeze over the Mediterranean",0,4.50, ["Olives", "Feta Cheese", "Oregano", "Onions"]);
$curry = new Food("Indian Curry", "Spicy and rich vegetable curry, simply irresistible",0,7.25,["Hot Peppers", "Coconut Chutney", "Raita"]);

//create an associative array of the food objects. The keys are used for the value property in the dropdown,
// and for a class name in the additional toppings div. This class is needed for the JQuery to work
$foodOffer = array("pizza" => $pizza, "burrito" => $burrito, "salad" => $salad, "curry" => $curry);

include 'header.php';
?>
<div class="row">

    <div class="col-sm-6">
    <h3>Today's menu</h3>
    <?php
    //iterate through the array of food objects and populate the menu with data from the objects
    foreach ($foodOffer as $food)

        echo '<div class = "menuItem">
              <h5 class="foodName">' . $food->name . '</h5>
              <p class="price"> | $' . $food->price . '</p>
              <p>' . $food->description . '</p>
              </div>' ;


    ?>
    </div>
<div id="template" class="hide">
    <div class="singleItem">
        <select class="item" name="items[]">
            <option value="" disabled selected>I want..</option>
            <?php

            //create the food select dropdown
            foreach ($foodOffer as $key => $food)
                echo '
              <option value="'.$key . '">' . $food->name . '</option>';

            ?>

        </select>

        <input type="number" name="quantity[]" min="1" max="10" placeholder="How many?" required>
        <input type="button" class="removeItem" value="-">


        <?php
        //create the additional toppings
        foreach ($foodOffer as $key => $food) {


            $availableToppings = $food->toppings;
//            echo var_dump($availableToppings);
            if ($availableToppings) {
                echo '<div class="hide toppings ' . $key . '">
                          <p>Additional Toppings - $0.75 each</p>';
                foreach ($availableToppings as $topping) {
//                    echo var_dump($topping);

                    echo '
                       <label><input type="checkbox" value="' . $topping . '">' . $topping . '</label>
                       
                       ';
                }
                echo '</div>';
            }
        }
        ?>
    </div>
</div>

<form method="post" action="formhandler.php">
    <div id = "food" class="col-sm-6">
        <img src="images/foodtruck.jpg" alt="Image of FoodTruck" class="img-responsive center-block img-thumbnail">
        <div class="form-group buttons">
            <input type="button" id="addItem" value="Add More">
            <input type="submit" value=" Place Order">
        </div>
    </div>

</form>
</div>
<script src="script.js">
</script>
</body>
</html>
