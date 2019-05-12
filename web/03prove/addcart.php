<?php
    session_start();
    $_SESSION['cart']=$_POST['data'];
    echo $_SESSION['data'];
?>
