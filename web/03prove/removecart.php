<?php
	session_start();
	$id = $_POST['item'];
	
	// Remove Cart Item
    unset($_SESSION['cartItems'][$id]);
	
	// Adjust the total
	$_SESSION['cartTotal'] -= (int)$_SESSION['cartPrices'][$id];
	
	// remove the price
	unset($_SESSION['cartPrices'][$id]);	
	
	// reseat the array index
	array_values($_SESSION['cartItems']);
	array_values($_SESSION['cartPrices']);
	
?>