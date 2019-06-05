<?php
    session_start();
	include 'connection.php';
    
    $id = $_POST['id'];
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
    
    try {
        $insert = 'UPDATE contact ' . 
                  'SET title = :title,' .
                  'first_name = :fname,' .     
                  'middle_name = :mname,' .  
                  'last_name = :lname,' .    
                  'company = :company,' .
                  'phone = :phone,' .  
                  'email = :email,' .  
                  'fup = :fup,' .  
                  'street = :street,' .  
                  'city = :city,' .  
                  'state = :state,' .  
                  'zip = :zip,' .  
                  'country = :country' .  
                  'WHERE id = :id';     

		$statement = $db->prepare($insert);
        
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
        $statement->bindValue(':country', $sountry);
		
		$statement->execute();
		
	}
	catch (Exception $err)
	{
		echo "Error with DB. Details: $err";
		die();
	}
	
	header("Location: contact.php?id=" . $id);
	
	die();
?>
