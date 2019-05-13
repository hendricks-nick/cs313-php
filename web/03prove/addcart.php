<?php
    session_start();

    $_SESSION['cartItems'] = $_POST['item'];

    if ($_POST['item'] == 'potato') {
        $_SESSION['cartPrices'] = 25.00;
        $_SESSION['cartTotal'] += 25.00;
    }
    else if($_POST['item'] == 'bloks') {
        $_SESSION['cartPrices'] = 10.00;
        $_SESSION['cartTotal'] += 10.00;
    }
?>
