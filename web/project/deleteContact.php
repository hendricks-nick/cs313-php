<?php
    session_start();
	include 'connection.php';
	
	$id = $_POST['id'];
    
    try {
		$insert = 'DELETE FROM contact WHERE id = :id';
		$statement = $db->prepare($insert);
		
        $statement->bindValue(':id', $id);
        
		$statement->execute();
		
	}
	catch (Exception $err)
	{
		echo "Error with DB. Details: $err";
		die();
	}
	
	header("Location: dashboard.php?deleteSuccess=y";
	
	die();
?>
