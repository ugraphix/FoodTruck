<?php
require "food.php";
//we need to build the form dynamically, from existing objects

//instantiate initial objects representing the types of food offered
$pizza = new Food("pizza");
$burrito = new Food("burrito");
$salad = new Food("salad");
$curry = new Food("curry");


/** @var array $foodOffer is an array of the available food objects*/
$foodOffer = array($pizza,$burrito,$salad,$curry);

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
        <select class="item" name="items[]" required aria-required="true">
            <option value="" disabled selected>I want..</option>
            <?php

            //create the food select dropdown
            foreach ($foodOffer as $food)
                echo '
              <option value="'.$food->type . '">' . $food->name . '</option>';

            ?>

        </select>

        <input type="number" name="quantity[]" min="1" max="10" placeholder="How many?" required>
        <input type="button" class="removeItem" value="-">


        <?php
        //create the additional toppings
        foreach ($foodOffer as $food) {


            $availableToppings = $food->extras;
//           echo var_dump($availableToppings);
            if ($availableToppings) {
                echo '<div class="hide toppings ' . $food->type . '">
                          <p>Additional Toppings - $0.75 each</p>';
                foreach ($availableToppings as $topping) {
//                   echo var_dump($topping);

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
        <h3>What do you feel like eating today?</h3>
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
