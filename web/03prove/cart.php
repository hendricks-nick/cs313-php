<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="alt_style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script type="text/javascript" src="cart.js"></script> 
    </head>
    <body>
      <?php include 'headerBar.php';?>
		<div class="bContainer">
		<div></div>
		<div class="cartProd">
			<h1> Shopping Cart</h1> <br> <br>
			<?php
				for ($x = 0; $x < sizeof($_SESSION['cartItems']); $x++){ 
					echo "Product: " . $_SESSION['cartItems'][$x] . " <br>"
					. "Price: $" . $_SESSION['cartPrices'][$x] . "<br>" 
					. '<input class="addCartBtn" type="button" value="Remove From Cart" id="' 
					. $x . '" onclick="removeCart(this)"/>' 
					. "<br> <br> <br>";
				}
				
				echo "Total: $" . $_SESSION['cartTotal'] . ".00 <br>";
			?>
		</div>
		<div></div>
	  </div>
    </body>
</html>