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
			<br><input type="checkbox" name="cont[]" value="NorthAmerica"/>North America
			<br><input type="checkbox" name="cont[]" value="SouthAmerica"/>South America	
			<br><input type="checkbox" name="cont[]" value="Europe"/>Europe
			<br><input type="checkbox" name="cont[]" value="Asia"/>Asia
			<br><input type="checkbox" name="cont[]" value="Australia"/>Australia
			<br><input type="checkbox" name="cont[]" value="Africa"/>Africa
			<br><input type="checkbox" name="cont[]" value="Antarctica"/>Antarctica
			<br>
			<input type="submit" value="submit"/>
		</form>
	</body>
<html>