<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
      <title>Dashboard</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="style.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    </head>
    <body>
      <?php include 'header.php';?> 
	  <div class="pageTitle">
	    <div></div>
		<div><h1> Dashboard </h1></div>
		<div></div>
	  </div>
	  <div class="bContainer">
	    <div></div>
		<div class="dbColumns">
		  <h2> New Contacts </h2>
		  <?php
		    echo '';
		  ?>
		</div>
		<div class="dbColumns">
		  <h2> Follow Ups </h2>
		  <?php
		    echo '';
		  ?>
		</div>
		<div class="dbColumns">
		  <h2> Quick Lists </h2>
		  <?php
		    echo '';
		  ?>
        </div>
        <div></div>
	  </div>
    </body>
</html>
