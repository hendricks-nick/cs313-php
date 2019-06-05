<?php
    session_start();
	include 'connection.php';
    
    $id = $_POST['contactID'];
	$title = $_POST['title'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $company = $_POST['company'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $fup = $_POST['fup_date'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $country = $_POST['country'];	
    
	if (isset($_POST['save'])) {
		try {
			$sql = 'UPDATE contact ' . 
					  'SET title = :title,' .
					  'first_name = :fname,' .     
					  'middle_name = :mname,' .  
					  'last_name = :lname,' .    
					  'company = :company,' .
					  'phone = :phone,' .  
					  'email = :email,' .  
					  'fup_date = :fup,' .  
					  'street = :street,' .  
					  'city = :city,' .  
					  'state = :state,' .  
					  'zip = :zip,' .  
					  'country = :country ' .  
					  'WHERE id = :id';     

			$statement = $db->prepare($sql);
			
			$statement->bindValue(':title', $title);
			$statement->bindValue(':fname', $fname);
			$statement->bindValue(':mname', $mname);
			$statement->bindValue(':lname', $lname);
			$statement->bindValue(':company', $company);
			$statement->bindValue(':phone', $phone);
			$statement->bindValue(':email', $email);
			$statement->bindValue(':fup', $fup);
			$statement->bindValue(':street', $street);
			$statement->bindValue(':city', $city);
			$statement->bindValue(':state', $state);
			$statement->bindValue(':zip', $zip);
			$statement->bindValue(':country', $country);
			$statement->bindValue(':id', $id);
			
			$statement->execute();
			
		}
		catch (Exception $err)
		{
			echo "Error with DB. Details: $err";
			die();
		}
		
		header("Location: contact.php?id=" . $id);
		
		die();
	}
	else if (isset($_POST['delete'])) {		
		try {
			$sql = 'DELETE FROM contact WHERE id = :id';
			$statement = $db->prepare($sql);
			
			$statement->bindValue(':id', $id);
			
			$statement->execute();
			
		}
		catch (Exception $err)
		{
			echo "Error with DB. Details: $err";
			die();
		}
		
		header("Location: dashboard.php");
		
		die();
	}
?>
