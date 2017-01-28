
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
<div id="template" class="hide">
    <div class="singleItem">
        <select class="item" name="items[]">
            <option value="" disabled selected>I want..</option>
            <option value="pizza">Pizza - $5.25</option>
            <option value="drink">Drink - $2.55</option>
            <option value="iceCream">Ice Cream - $3.50</option>
        </select>
        <input type="number" name="quantity[]" min="1" max="10" placeholder="How many?">
        <input type="button" class="removeItem" value="-">
        <div class="hide toppings pizza">
            <p>Additional Toppings - $1 each</p>
            <input type="checkbox" value="cheese">Cheese
            <input type="checkbox" value="mushrooms">Mushrooms
            <input type="checkbox" value="bacon">Bacon
            <input type="checkbox" value="pesto">Pesto
        </div>
        <div class="hide toppings drink">
            <p>Choose your drink - $2.50 each</p>
            <input type="checkbox" value="pepsi">Pepsi
            <input type="checkbox" value="coke">Coke
            <input type="checkbox" value="coffee">Coffee
            <input type="checkbox" value="tea">Tea
        </div>
        <div class="hide toppings iceCream">
            <p>Additional Flavors - $.50 each</p>
            <input type="checkbox" value="chocolate">Chocolate
            <input type="checkbox" value="walnuts">Walnuts
            <input type="checkbox" value="coconuts">Coconut
            <input type="checkbox" value="strawberries">Strawberries
        </div>
    </div>
</div>
<form method="post" action="formhandler.php">
    <div id = "food">
    </div>
    <input type="button" id="addItem" value="Add More">
    <input type="submit" value=" Place Order">
</form>
<script src="script.js">
</script>
</body>
</html>
