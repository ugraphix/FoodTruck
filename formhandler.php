<?php
require 'food.php';
include 'includes/header.php';
//echo '<pre>';
//echo var_dump($_POST);
//echo '</pre>';


/*
 * Error handling to prevent injection attacks
 * Error handling to resolve failure to select and item before summit
 * feedback('Please select the item you want X number of.');
 * send back to whatever page they came from
 */


/*
 * Provide feedback() function to communicate data issues with end user.
 *
 * @TODO add feedback functionality to communicate end user issue
 */
/*
 * if(!isset($_POST['YourName']) || $_POST['YourName'] == '')
	{//data must be sent
		feedback("No form data submitted"); #will feedback to submitting page via session variable
		myRedirect(THIS_PAGE);
	}
*/


$chekQuantity = $_POST["quantity"][0];
$chekType = $_POST["items"][0];
#has value?   Value is not empty
#has meaning? A food type has been selected
if ( (!isset($chekQuantity)) || ($chekQuantity  == '' ) ||
     (!isset($chekType))     || ($chekType  == '' ))
{

// session started in header
// if value empty will replace slogan with warning to user
// feedback to submitting page via session variable
    $_SESSION['feedback'] = "We&rsquo;re Sorry, we could not process your order.<br />Please check your order and try again.";
    header( 'Location: index.php' ) ;
}


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
$total = 0;
foreach ($foodOrder as $food) {
    echo '<div class = "orderSummary menuItem col-md-6 col-md-offset-3">
              
              <h5 class="foodName">' . $food->name . ' x ' . $food->quantity . '</h5>
              <p class="foodName cost">$' . $food->CalculatePerItemSubtotal() . ' </p>
              <button type="button" class="btn btn-info">+</button>
             <div class = "priceDetails" >
              <p>Base price:(' . $food->price . ' /each)</p>
              <p class="cost">$' . $food->CalculateBasePrice() . ' </p>
              <p>+' . implode(", ", $food->toppings) . '(' . $food->CalculateToppingsCost() . ' /each) </p>
              <p class="cost">$' . $food->CalculateToppingsCostTotal() . '  </p>
              
<!-- added by Ayumi 2/3-->
              <!-- <p>Subtotal before tax (' . $food->quantity . ' orders): </p>
              <p class="cost">$' . $food->CalculateSubtotalBeforeTax() . ' </p>-->
              
              <p>Tax (9.6%)</p>
              <p class="cost">$' . $food->CalculateTax() . ' </p>
              <hr>
              <p>Subtotal:</p>
              <p class="cost">$' . $food->CalculatePerItemSubtotal() . ' </p>             
              </div>
        </div>';
    //calculate total

    $total += $food->CalculatePerItemSubtotal();
}

//display total
echo '<div class = "orderSummary menuItem col-md-6 col-md-offset-3">
    <h5 class="total">Total:</h5>
    <p class="total cost">$' . number_format($total, 2) . ' </p>
    </div>';

include 'includes/footer.php';