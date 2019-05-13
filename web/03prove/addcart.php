<?php
    session_start();

    if ($_POST['item'] == 'potato') {
		array_push($_SESSION['cartItems'], "Mr. Potato Head");
        array_push($_SESSION['cartPrices'], "25.00");
        $_SESSION['cartTotal'] += 25.00;
		
    }
?>
