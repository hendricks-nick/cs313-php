<?php
    session_start();
	echo "console.log('addcart' " . $_POST['item'] .")";
    if ($_POST['item'] == 'potato') {
		array_push($_SESSION['cartItems'], "Mr. Potato Head");
        array_push($_SESSION['cartPrices'], "25.00");
        $_SESSION['cartTotal'] += 25.00;
		
    }
?>
