<?php
$name = $_POST["name"];
$email = $_POST["email"];
$major = $_POST["major"];
$comment = $_POST["tArea"];
$stretchTwo = array("NA"=>"North America", "SA"=>"South America",
				    "EU"=>"Europe", "AS"=>"Asia", "AU"=>"Australia",
					"AF"=>"Africa", "AT"=>"Antarctica");

echo "First Name: " . $name;
echo "<br/>";
echo "Email: " . "<a href='mailto:" . $email . "'>" . $email . "</a>";
echo "<br/>";
echo "Major: " . $major;
echo "<br/>";
echo $comment;
echo "<br/>";
if(!empty($_POST["cont"])) {     
	foreach($_POST["cont"] as $check) {             
		echo $stretchTwo[$check] . "<br/>";      
	} 
}
?>