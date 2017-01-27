
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Food Truck</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>
<h1>Welcome to FoodTruck</h1>
<h3>Feeling hungry? We got you covered! Make your selection, order and relax</h3>
<form method="post" action="formhandler.php">
    <div id = "food">
        <div class="singleItem">
    <select class="item" name="items[]">
        <option disabled selected>I want..</option>
        <option value="pizza">Pizza - $5.25</option>
        <option value="drink">Drink - $2.55</option>
        <option value="iceCream">Ice Cream - $3.50</option>
    </select>
    <input type="number" name="quantity[]" min="1" max="10" placeholder="How many?">
        </div>
<!-- This is for the toppings. They would show after a selection of food is made
(Extra Credit - @todo Include toppings after the basic app is finished-->
<!--    <div class="pizzaToppings hide">-->
<!--    <p>Additional Toppings - $1 each</p>-->
<!--    <input type="checkbox" name="pizzaToppings[]" value="cheese">Cheese-->
<!--    <input type="checkbox" name="pizzaToppings[]" value="mushrooms">Mushrooms-->
<!--    <input type="checkbox" name="pizzaToppings[]" value="bacon">Bacon-->
<!--    <input type="checkbox" name="pizzaToppings[]" value="pesto">Pesto-->
<!--    </div>-->
<!--    <div class=" drinks hide">-->
<!--    <p>Choose your drink - $2.50 each</p>-->
<!--    <input type="checkbox" name="drinks[]" value="pepsi">Pepsi-->
<!--    <input type="checkbox" name="drinks[]" value="coke">Coke-->
<!--    <input type="checkbox" name="drinks[]" value="coffee">Coffee-->
<!--    <input type="checkbox" name="drinks[]" value="tea">Tea-->
<!--    </div>-->
<!--    <div class="iceCream hide">-->
<!--    <p>Additional Flavors - $.50 each</p>-->
<!--    <input type="checkbox" name="iceCream[]" value="chocolate">Chocolate-->
<!--    <input type="checkbox" name="iceCream[]" value="walnuts">Walnuts-->
<!--    <input type="checkbox" name="iceCream[]" value="coconuts">Coconut-->
<!--    <input type="checkbox" name="iceCream[]" value="strawberries">Strawberries-->
<!--    </div>-->
    </div>
    <input type="button" id="addItem" value="Add More">
    <input type="submit" value=" Place Order">
</form>
<script src="script.js">
</script>
</body>
</html>
