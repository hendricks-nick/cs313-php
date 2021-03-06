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
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    </head>
    <body>
      <?php include 'header2.php';?>
      <div class="pageTitle">
			<div></div>
			<div><h1>Search Results</h1></div>
			<div></div>
			<div></div>
			<div></div>
	  </div>
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
				foreach ($db->query('SELECT * FROM contact WHERE lower(first_name) LIKE lower(\'%' . $_GET["search"] . '%\')' .
														' OR lower(middle_name) LIKE lower(\'%' . $_GET["search"] . '%\')' .
														' OR lower(last_name) LIKE lower(\'%' . $_GET["search"] . '%\')' .
														' OR lower(title) LIKE lower(\'%' . $_GET["search"] . '%\')' .
														' OR lower(company) LIKE lower(\'%' . $_GET["search"] . '%\')' .
														' OR lower(phone) LIKE lower(\'%' . $_GET["search"] . '%\')' .
														' OR lower(email) LIKE lower(\'%' . $_GET["search"] . '%\')' .
														' OR lower(street) LIKE lower(\'%' . $_GET["search"] . '%\')' .
														' OR lower(city) LIKE lower(\'%' . $_GET["search"] . '%\')' .
														' OR lower(state) LIKE lower(\'%' . $_GET["search"] . '%\')' .
														' OR lower(zip) LIKE lower(\'%' . $_GET["search"] . '%\')' .
				     	 	 	 	 	 			' OR lower(country) LIKE lower(\'%' . $_GET["search"] . '%\')') as $row)
				{
				  echo '<div></div>' .
				       '<div>' . $row['id'] . '</div>' .
					     '<div><strong><a href="contact.php?id=' . $row['id'] .'">' . $row['first_name'] . ' ' . $row['last_name'] . '</a></strong></div>' .
					     '<div>' . $row['company'] . '</div>' .
					     '<div>' . $row['title'] . '</div>' .
					     '<div>' . $row['phone'] . '</div>' . 
					     '<div>' . $row['email'] . '</div>' .
					     '<div>' . $row['fup_date'] . '</div>' .
					     '<div></div>';
				}
			  ?>
	  </div>
    </body>
</html>
