<!DOCTYPE html>
<html>
    <head>
        <title>Checkout</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="alt_style.css">
    </head>
    <body>
	  <?php include 'headerBar.php';?>
		<div class="bContainer">
		<div></div>
		<div>
		  <form class="checkoutForm"action="<?php echo htmlspecialchars("confirmation.php");?>" method="post">
			  <h1> Checkout </h1> <br> <br>
			  <br>
			  <input type="text" name="firstname" placeholder="First Name">
			  <br><br>
			  <input type="text" name="lastname" placeholder="Last Name">
			  <br><br>
			  <h3> Address </h3>
			  <br> <br>
			  <input type="text" name="address_street" placeholder="Street Address">
			  <br><br>
			  <input type="text" name="address_city" placeholder="City">
			  <br><br>
			  <input type="text" name="address_state" placeholder="State">
			  <br><br>
			  <input type="text" name="address_zip" placeholder="Zip Code">
			  <br><br>
			  <input type="submit" value="Place Order">
			</form>
		</div>	
		<div></div>
		</div>
    </body>
</html>