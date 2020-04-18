<!DOCTYPE html>
<html>

<!--==================================================================
//
// Web site: DoorCrash
// Web page: Order Confirmation Page
// Description:
//   This place asks user about his/her contact information 
//   and helps them place an order.
// 
//=================================================================-->

<head>
  
	<title>Order, v4</title>
	<meta charset="UTF-8">
	<meta name="author" content="[name]"/>
	<meta name="description" content="[application title]"/>
    <meta http-equiv="Expires" content="-1">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>

<body>
<?php
        // Retrieve contents from the json file 
        $restaurant_array = file_get_contents("FoodData.json");
        // Convert the JSON string to array
        $array = json_decode($restaurant_array, true);

        for($i = 0; $i < count($array); $i++){
            $string_split = substr($_POST ["FoodItem"], 0, strpos($_POST ["FoodItem"]," $"));
            $restro_name = $_POST ["restaurant"];

            if($array[$i]['food_item'] == $string_split && $array[$i]['restaurant'] == $restro_name)
			 {	 
				$quant = (int)$_POST ["Quantity"];
				$array[$i]['Quantity_sold'] += $quant;
             }
        }
        $array_encode = json_encode($array, true);
        file_put_contents("FoodData.json", $array_encode);
        echo("<script>console.log( " . $array_encode . ");</script>");
	?>
<div class="orderbody">
	<!-- A header has been added which mentions the name of the website -->
	<header>DoorCrash</header>
		<nav>
				<a href="main.html">Home</a>
				<a href="restaurant.html">Restaurants</a>
				<a href="order.html">Order</a>
				<a href=#contact>Contact Us</a>
		</nav>
	<br>
	<div class="order">
    <h2>ORDER DETAILS:</h2>

    <?php
    // Display the contents on the web page
        echo '<b>First Name: </b>' . $_POST ["first_name"] . '<br>';
        echo '<b>Last Name: </b>' . $_POST ["last_name"] . '<br>';
        echo '<b> Address: </b> ' . $_POST ["address1"] . '<br>';
        echo '<b>Phone: </b>' . $_POST ["phone"] . '<br>';
        echo '<b>Restaurant Name: </b> ' . $_POST ["restaurant"]. '<br>';
        echo '<b>Food Item: </b> ' . $_POST ["FoodItem"]. '<br>';
        echo '<b>Quantity: </b>' . $_POST ["Quantity"]. '<br>';
        echo '<b>Cost: </b>' . $_POST ["Cost"]. '<br>';
        echo '<b>Order Total: </b>' . $_POST ["Total"];
    ?>
    </div>	
</div>
    <!-- All the contact information has been described in the bottom section of the web page -->
    <footer id="contact">
        Contact us <br>
        DoorCrash, 42 W. Warren Ave. Detroit, MI, 48202 <br> 
		<a href="Contact us ">support@dcrash.com</a> <br> 313-123-4567<br><br>
        Owner:Aishwarya Kadam.<br />
        &copy; DoorCrash 2019 All Rights Reserved.
    </footer> 
</body>
</html>
