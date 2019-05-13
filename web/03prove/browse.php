<?php
    session_start();
    
    //A simple array that contains products.
    if(!isset($_SESSION["cartItems"])) {
		$_SESSION["cartItems"] = array();
		$_SESSION["cartPrices"] = array();
		$_SESSION["cartTotal"] = 0;
	}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ethan's Toy Corner</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="alt_style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script type="text/javascript" src="cart.js"></script>  
    </head>
    <body>
      <?php include 'headerBar.php';?>
      <div class="bContainer">
        <div class="product">
          <img src="images/basketball.jpg" alt="basketball hoop">
          <br>
          <div class="prodTitle"> Basketball Hoops </div>
          <input class="addCartBtn" type="button" value="Add To Cart" id="hoop" onclick="addToCart(this)"/>
        </div>
        <div class="product">
          <img src="images/potato_head.jpg" alt="potato head">
          <br>
          <div class="prodTitle">Mr. Potato Head</div>
          <input class="addCartBtn" type="button" value="Add To Cart" id="potato" onclick="addToCart(this)"/>
        </div>
        <div class="product">
          <img src="images/rubiks.jpg" alt="rubiks">
          <br>
          <div class="prodTitle">Rubiks Cube</div>
          <input class="addCartBtn" type="button" value="Add To Cart" id="rubik" onclick="addToCart(this)"/>
        </div>
        <div class="product">
          <img src="images/bloks.jpg" alt="bloks">
          <br>
          <div class="prodTitle">Building Bloks</div>
          <input class="addCartBtn" type="button" value="Add To Cart" id="blok" onclick="addToCart(this)"/>
        </div>
        <div class="product">
          <img src="images/trike.jpg" alt="tricycle">
          <br>
          <div class="prodTitle">Tricycle</div>
          <input class="addCartBtn" type="button" value="Add To Cart" id="trike" onclick="addToCart(this)"/>
        </div>
        <div class="product">
          <img src="images/truck.jpg" alt="truck">
          <br>
          <div class="prodTitle">Toy Truck</div>
          <input class="addCartBtn" type="button" value="Add To Cart" id="truck" onclick="addToCart(this)"/>
        </div>
      </div>
    </body>
</html>
