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
	  <div class="contactColumns">
	      <div></div>
		  <div><h2>ID</h2></div>
		  <div><h2>Name</h2></div>
		  <div><h2>Company</h2></div>
		  <div><h2>Title</h2></div>
		  <div><h2>Phone</h2></div>
		  <div><h2>Email</h2></div>
		  <div><h2>Follow Up Date</h2></div>
		  <div></div>
		  <?php
				foreach ($db->query('SELECT * FROM contact') as $row)
				{
				  echo '<div></div>' .
				       '<div class="columnFormat">' . $row['id'] . '</div>' .
					   '<div><strong><a href="contact.php?id=' . $row['id'] .'">' . $row['first_name'] . ' ' . $row['last_name'] . '</a></strong></div>' .
					   '<div class="columnFormat">' . $row['company'] . '</div>' .
					   '<div>' . $row['title'] . '</div>' .
					   '<div class="columnFormat">' . $row['phone'] . '</div>' . 
					   '<div>' . $row['email'] . '</div>' .
					   '<div class="columnFormat">' . $row['fup_date'] . '</div>' .
					   '<div></div>';
				}
			  ?>
	  </div>
    </body>
</html>
