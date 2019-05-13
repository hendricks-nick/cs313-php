<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="alt_style.css">
    </head>
    <body>
      <?php include 'headerBar.php';
        if(!empty($_SESSION["cartItems"])) {     
            foreach($_SESSION["cartItems"] as $items) {             
                echo $items . "<br/>";      
            } 
        if(!empty($_SESSION["cartPrices"])) {     
            foreach($_SESSION["cartPrices"] as $price) {             
                echo $price . "<br/>";      
            }
        echo "Total: $" . $_SESSION["cartTotal"];    
      ?>
    </body>
</html>