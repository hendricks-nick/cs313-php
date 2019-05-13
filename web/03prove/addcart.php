<?php
    session_start();
    if ($_POST['item'] == 'potato') {
		array_push($_SESSION['cartItems'], "Mr. Potato Head");
        array_push($_SESSION['cartPrices'], "25.00");
        $_SESSION['cartTotal'] += 25.00;
		return "Success";
    }
	else if ($_POST['item'] == 'hoop') {
		array_push($_SESSION['cartItems'], "Basketball Hoop");
        array_push($_SESSION['cartPrices'], "15.00");
        $_SESSION['cartTotal'] += 15.00;
		return "Success";
    }
	else if ($_POST['item'] == 'rubik') {
		array_push($_SESSION['cartItems'], "Rubiks Cude");
        array_push($_SESSION['cartPrices'], "10.00");
        $_SESSION['cartTotal'] += 10.00;
		return "Success";
    }
	else if ($_POST['item'] == 'blok') {
		array_push($_SESSION['cartItems'], "Building Bloks");
        array_push($_SESSION['cartPrices'], "12.00");
        $_SESSION['cartTotal'] += 12.00;
		return "Success";
    }
	else if ($_POST['item'] == 'trike') {
		array_push($_SESSION['cartItems'], "Tricycle");
        array_push($_SESSION['cartPrices'], "40.00");
        $_SESSION['cartTotal'] += 40.00;
		return "Success";
    }
	else if ($_POST['item'] == 'truck') {
		array_push($_SESSION['cartItems'], "Toy Truck");
        array_push($_SESSION['cartPrices'], "18.00");
        $_SESSION['cartTotal'] += 18.00;
		return "Success";
    }
?>
