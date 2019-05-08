<!DOCTYPE html>
<html>
	<head>
	  <style>
	    form {
		  text-align: center;
		}
	  </style>
	</head>
	<body>
		<form action="form.php" method="post">
			<h1>Name:</h1> 
			<br><input type="text" name="name"/>
			<br>
			<h1>Email:</h1> 
			<br><input type="text" name="email"/>
			<br>
			<h1>Major:</h1> 
			<?php
			  $majors = array("Comp Science", "Web Design", "CIT", "Comp Engineer");
			  if (!empty($majors)) {
			    foreach($majors as $stretch) {
				  echo '<br><input type="radio" name="major" value="' . $stretch . '"/>' . $stretch;
				}
			  }
			?>
			<h1>Comments:</h1> 
			<textarea name="tArea"></textarea>
			<br>
			<h1>Continents:</h1> 
			<br><input type="checkbox" name="cont[]" value="NA"/>North America
			<br><input type="checkbox" name="cont[]" value="SA"/>South America	
			<br><input type="checkbox" name="cont[]" value="EU"/>Europe
			<br><input type="checkbox" name="cont[]" value="AS"/>Asia
			<br><input type="checkbox" name="cont[]" value="AU"/>Australia
			<br><input type="checkbox" name="cont[]" value="AF"/>Africa
			<br><input type="checkbox" name="cont[]" value="AT"/>Antarctica
			<br>
			<input type="submit" value="submit"/>
		</form>
	</body>
<html>