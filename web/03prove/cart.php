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
      <?php include 'headerBar.php';?>
	  <?php echo $_SESSION['cartItems'];
    </body>
</html>