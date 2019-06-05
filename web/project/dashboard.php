<?php
    session_start();
	include 'connection.php';
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
      <?php include 'header2.php';?> 
	  <div class="pageTitle">
	    <div></div>
		<div><h1>Dashboard</h1></div>
		<div></div>
		<div></div>
		<div></div>
	  </div>
	  <div class="bContainer">
		<div></div>
		<div><h2> New Contacts </h2></div>	
		<div><h2> Follow Ups </h2></div>		
		<div><h2> Quick Lists </h2></div>
        <div></div>
	    <div></div>
		<div class="ncColumn">
		  <div><h3>Name</h3></div>
		  <div><h3>Phone</h3></div>
		  <div><h3>Email</h3></div>
		  <?php
			foreach ($db->query('SELECT * FROM contact') as $row)
			{
			  echo '<div><strong><a href="contact.php?id=' . $row['id'] .'">' . $row['first_name'] . ' ' . $row['last_name'] . '</a></strong></div>' .
			       '<div>' . $row['phone'] . '</div>' . 
				   '<div>' . $row['email'] . '</div>';
			}
		  ?>
		</div>
		<div class="fupColumn">
		  <?php
		    echo '';
		  ?>
		</div>
		<div class="liColumn">
		  <?php
		    echo '';
		  ?>
        </div>
        <div></div>
	  </div>
    </body>
</html>
