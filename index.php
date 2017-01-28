
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
            <label><input type="checkbox" value="cheese">Cheese</label>
            <label><input type="checkbox" value="mushrooms">Mushrooms</label>
            <label><input type="checkbox" value="bacon">Bacon</label>
            <label><input type="checkbox" value="pesto">Pesto</label>
        </div>
        <div class="hide toppings drink">
            <p>Choose your drink - $2.50 each</p>
            <label><input type="checkbox" value="pepsi">Pepsi</label>
            <label><input type="checkbox" value="coke">Coke</label>
            <label><input type="checkbox" value="coffee">Coffee</label>
            <label><input type="checkbox" value="tea">Tea</label>
        </div>
        <div class="hide toppings iceCream">
            <p>Additional Flavors - $.50 each</p>
            <label><input type="checkbox" value="chocolate">Chocolate</label>
            <label><input type="checkbox" value="walnuts">Walnuts</label>
            <label><input type="checkbox" value="coconuts">Coconut</label>
            <label><input type="checkbox" value="strawberries">Strawberries</label>
        </div>
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
