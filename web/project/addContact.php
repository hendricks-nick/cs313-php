<?php
    session_start();
	include 'connection.php';
	
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	try {
		$insert = 'INSERT INTO contact(first_name, last_name, phone, email) VALUES (:fname, :lname, :phone, :email)';
		$statement = $db->prepare($insert);
		
		$statement->bindValue(':fname', $fname);
		$statement->bindValue(':lname', $lname);
		$statement->bindValue(':phone', $phone);
		$statement->bindValue(':email', $email);
		
		$statement->execute();
		
		$newId = $db->lastInsertId("contact_id_seq");
	}
	catch (Exception $err)
	{
		echo "Error with DB. Details: $err";
		die();
	}
	
	header("Location: contact.php?id=" . $newId);
	
	die();
?>
