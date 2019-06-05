<?php
    session_start();
	include 'connection.php';
	
	$id = $_POST['contactID'];
    
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
	
	header("Location: dashboard.php";
	
	die();
?>
