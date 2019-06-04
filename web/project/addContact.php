<?php
    session_start();
	include 'connection.php';
	
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	
	$insert = "INSERT INTO contact (first_name, last_name, phone, email)
			   VALUES (\'" . $fname . "\', \'"  . $lname . "\', \'"  . $phone . 
			   "\', \'"  . $email . "\')";
			   	   
	$db->query($insert);
	
	/*if ($db->query($insert) === TRUE) {
	  echo "Successfully Added";
	}
	else {
	  echo "Error Adding";
	}*/

?>
<script>
  console.log(<?php echo json_encode($_POST); ?>);
  console.log(<?php $insert; ?>);
</script>