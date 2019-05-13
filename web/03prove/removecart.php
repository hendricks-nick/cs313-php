<?php
	session_start();
	$id = $_POST['item'];
	
    unset($_SESSION['cartItems'][$id]);
	
	//$_SESSION['cartTotal'] -= (int)$_SESSION['cartPrices'][$id];
	
	//unset($_SESSION['cartPrices'][$id]);	
}
	
?>