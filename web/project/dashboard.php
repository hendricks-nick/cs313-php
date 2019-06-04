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
      <?php include 'header.php';?> 
	  <div class="pageTitle">
	    <div></div>
		<div><h1> Dashboard </h1></div>
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
		  <?php
			foreach ($db->query('SELECT * FROM contact WHERE id =\''. $_GET['id'] . '\'') as $row)
			{
			  echo '<br><strong>' . $row['book'] . ' ' . $row['chapter'] 
			  . ':' . $row['verse'] . '</strong> - ' . $row['content'];
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
