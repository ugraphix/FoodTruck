<?php
    #to handle session data -- for form postback
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Food Truck</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

    <?php
    #If value empty, display appropriate error
    echo '
    <script type="text/javascript" src="./includes/errorHandling.js"></script>
	<script type="text/javascript">
		function checkForm(thisForm)
		{//check form data for valid info
			if(empty(thisForm.items[],"Please Select An Item")){return false;}
			if(empty(thisForm.quantity[],"Please Select An Item")){return false;}
			return true;//if all is passed, submit!
		}
	</script>
	';

    #var_dump($_SESSION);
    // if feedback = '', show slogan
    if(isset($_SESSION['feedback'])){
        echo '<h4 class="text-center slogan">Feeling hungry? We got you covered!</h4>';
    }else{
        //if feedback = something, show warning.
        echo '<h4 class="text-center slogan feedback">' . $_SESSION['feedback'] . '</h4>';
    }
    ?>


    <div class="row">

