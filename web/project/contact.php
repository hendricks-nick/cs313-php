<?php
    session_start();
	include 'connection.php';
	foreach ($db->query('SELECT * FROM contact WHERE id =\''. $_GET['id'] . '\'') as $row)
			{
				$title = $row['title'];
				$fname = $row['first_name'];
				$mname = $row['middle_name'];
				$lname = $row['last_name'];
				$company = $row['company'];
				$phone = $row['phone'];
				$email = $row['email'];
				$fup = $row['fup_date'];
				$street = $row['street'];
				$city = $row['city'];
				$state = $row['state'];
				$zip = $row['zip'];
				$country = $row['country'];			
			}
?>
<!DOCTYPE html>
<html>
    <head>
        <<title><?php echo $fname . " " . $lname; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    </head>
    <body>
	  <?php include 'header.php';?> 
	  <div class="pageTitle">
	    <div></div>
		<div><h1><?php echo fname . " " . lname; ?></h1></div>
		<div></div>
	  </div>
	  <form action="">
		  <div class="bContainer">
			<div></div>
			<div>
			  <h2>Personal Information</h2>
			  <?php echo '<br>Title<br>'.
						 '<input type="text" name="title" value="'. $title . '">' .
						 '<br>First Name<br>'.
						 '<input type="text" name="fname" value="'. $fname . '">' .
						 '<br>Middle Name<br>'.
						 '<input type="text" name="mname" value="'. $mname . '">' .
						 '<br>Last Name<br>'.
						 '<input type="text" name="lname" value="'. $lname . '">' .
						 '<br>Company<br>'.
						 '<input type="text" name="company" value="'. $company . '">' .
						 '<br>Follow Up Date<br>'.
						 '<input type="text" name="fup" value="'. $fup . '"><br><br>';
			  ?>
			  <h2>ContactInformation</h2>
			  <?php echo '<br>Phone<br>'.
						 '<input type="text" name="phone" value="'. $phone . '">' .
						 '<br>Email<br>'.
						 '<input type="text" name="email" value="'. $email . '">';
			  ?>
			</div>
			<div></div>
			<div>
			  <h2>Address</h2>
			  <?php echo '<br>Street Address<br>'.
						 '<input type="text" name="street" value="'. $street . '">' .
						 '<br>City <br>'.
						 '<input type="text" name="city" value="'. $city . '">' .
						 '<br>State<br>'.
						 '<input type="text" name="state" value="'. $state . '">' .
						 '<br>Zipcode<br>'.
						 '<input type="text" name="zip" value="'. $zip . '">' .
						 '<br>Country<br>'.
						 '<input type="text" name="country" value="'. $country . '">';		 
			  ?>
			</div>
			<div></div>
	    </div>
	  </form>
    </body>
</html>