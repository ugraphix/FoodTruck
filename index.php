<?php
require "food.php";
//we need to build the form dynamically, from our existing objects
//instantiate initial objects representing the types of food offered
$pizza = new Food("Italian Pizza","Delicious taste of Italy,with fresh mozzarella and olive oil", 0,6.99,["Peppers", "Mushrooms", "Tomatoes", "Pesto"]);
$burrito = new Food("Mexican Burrito","¡Ay, caramba! Straight from burrito heaven to your table", 0,6.50,["Cilantro", "Sour Cream", "Guacamole", "Salsa"]);
$salad = new Food("Greek Salad","Fresh like a summer breeze over the Mediterranean",0,4.50, ["Olives", "Feta Cheese", "Oregano", "Onions"]);
$curry = new Food("Indian Curry", "Spicy and rich vegetable curry, simply irresistible",0,7.25,["Hot Peppers", "Coconut Chutney", "Raita"]);
//create an array of the food objects
$foodOffer = array("pizza" => $pizza, "burrito" => $burrito, "salad" => $salad, "curry" => $curry);
//$foodOffer[0] = $pizza;
//$foodOffer[1] = $burrito;
//$foodOffer[2] = $salad;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Food Truck</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="container">
<h1 class="text-center">FoodTruck</h1>
<h4 class="text-center slogan">Feeling hungry? We got you covered!</h4>
    <img src="images/foodtruck.jpg" alt="Image of FoodTruck" class="img-responsive center-block img-thumbnail">
    <div class="menu">
    <h3>Today's menu</h3>
    <?php
    //iterate through the array of food objects and populate the menu with data from the objects
    foreach ($foodOffer as $food)

        echo '<div class = "menuItem">
              <h5>' . $food->name . '</h5>
              <p class="price">' . $food->price . '</p>
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

        <input type="number" name="quantity[]" min="1" max="10" placeholder="How many?">
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
    <div id = "food">
    </div>
    <div class="form-group buttons">
    <input type="button" id="addItem" value="Add More">
    <input type="submit" value=" Place Order">
    </div>
</form>
</div>
<script src="script.js">
</script>
</body>
</html>
