<?php
  session_start();
  
  //Check if the session variable exists.
  if(!isset($_SESSION['cart'])){
    //If it doesn't, create an empty array.
    $_SESSION['cart'] = array();
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ethan's Toy Corner</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="alt_style.css">
    </head>
    <body>
      <?php include 'headerBar.php';?>
      <div class="bContainer">
        <div class="product">
          <img src="images/basketball.jpg" alt="basketball hoop">
          <br>
          <div class="prodTitle"> Basketball Hoops </div>
          <button class="addCartBtn" type="button">Add To Cart</button>
        </div>
        <div class="product">
          <img src="images/potato_head.jpg" alt="potato head">
          <br>
          <div class="prodTitle">Mr. Potato Head</div>
          <button class="addCartBtn" type="button">Add To Cart</button>
        </div>
        <div class="product">
          <img src="images/rubiks.jpg" alt="rubiks">
          <br>
          <div class="prodTitle">Rubiks Cube</div>
          <button class="addCartBtn" type="button">Add To Cart</button>
        </div>
        <div class="product">
          <img src="images/bloks.jpg" alt="bloks">
          <br>
          <div class="prodTitle">Building Bloks</div>
          <button class="addCartBtn" type="button">Add To Cart</button>
        </div>
        <div class="product">
          <img src="images/trike.jpg" alt="tricycle">
          <br>
          <div class="prodTitle">Tricycle</div>
          <button class="addCartBtn" type="button">Add To Cart</button>
        </div>
        <div class="product">
          <img src="images/truck.jpg" alt="truck">
          <br>
          <div class="prodTitle">Toy Truck</div>
          <button class="addCartBtn" type="button">Add To Cart</button>
        </div>
      </div>
    </body>
</html>
