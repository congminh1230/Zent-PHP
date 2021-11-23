<?php

session_start();
$product_in_cart = array();
if (isset($_SESSION['cart'])) {
    // $_SESSION['cart'][ $_GET['id']]['product_amount'] -= 1; 
    // $numbers = $_GET['id'];
    // echo "<pre>";
    //     print_r($numbers);
    // echo "<pre>";
    if($_SESSION['cart'][ $_GET['id']]['product_amount'] > 1  ) {
        $_SESSION['cart'][ $_GET['id']]['product_amount'] -= 1; 
        header('Location:cart.php');
    }else {
        unset($_SESSION['cart'][ $_GET['id']]);
        header('Location:cart.php');
    }
}

?>