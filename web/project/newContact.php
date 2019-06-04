<?php
    session_start();
	include 'connection.php';
?>
<!DOCTYPE html>
<html>
    <head>
      <title>Add Contact</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="style.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    </head>
    <body>
      <?php include 'header.php';?> 
	  <div class="bContainer">
		<div></div>
		<div></div>
	    <div>
	      <form action="addContact.php" method="post"> 
		    <br>
			First name:<br>
		    <input type="text" name="fname">
		    <br>
			Last name:<br>
		    <input type="text" name="lname">
			<br>
			Email:<br>
		    <input type="text" name="email">
			<br>
			Phone:<br>
		    <input type="text" name="phone">
		    <br><br>
	        <input type="submit" value="Submit">
          </form> 
		</div>
		<div></div>
		<div></div>
	  </div>
    </body>
</html>