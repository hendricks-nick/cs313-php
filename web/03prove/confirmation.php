<?php
	session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Confirmation</title>
    </head>
    <body>
	<div class="imgbox">   
		<img class="center-fit" src="images/banner.png" alt="EthansToyCorner Banner"/>
	</div> 
	<div class="bContainer">
	  <div></div>
	  <div>
	  <h1> Order Confirmation </h1>
	  <h3> Thank you for your order! </h3>
	  <h3> Order Details: </h3>
	  <?php
		echo "Name: <br>" . $_POST['firstname'] . " " . $_POST['lastname'] . "<br>"
		. "Address: <br>" . $_POST['address_street'] . "<br>"
		. $_POST['address_city'] . ", " . $_POST['address_state'] . " " . $_POST['address_zip'] . "<br>"
		. "Items: <br>";
			
		for ($x = 0; $x < sizeof($_SESSION['cartItems']); $x++){ 
			echo $_SESSION['cartItems'][$x] . "----$" . $_SESSION['cartPrices'][$x] 
			. "<br> <br>";
		}
			
		echo "Total: $" . $_SESSION['cartTotal'] . ".00 <br>";
	  ?>
	  </div>
	  <div></div>
	</div>
    </body>
</html>