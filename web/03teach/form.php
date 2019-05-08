<?php
$name = $_POST["name"];
$email = $_POST["email"];
$major = $_POST["major"];
$comment = $_POST["tArea"];

echo "First Name: " . $name;
echo "<br/>";
echo "Email: " . "<a href='mailto:" . $email . "'>" . $email . "</a>";
echo "<br/>";
echo "Major: " . $major;
echo "<br/>";
echo $comment;
if(!empty($_POST["cont"])) {     
	foreach($_POST["cont"] as $check) {             
		echo $check . "<br/>";      
	} 
}
?>