<?php

session_start();
$product_in_cart = array();
if (isset($_SESSION['cart'])) {
    $_SESSION['cart'][ $_GET['id']]['product_amount'] += 1;
//   $product_in_cart = $_SESSION['cart'];
  $numbers = $_GET['id'];
//   $numbers += 1;
//     var_dump($numbers);
//     echo "<br/>";
    // echo "<pre>";
    //     print_r($numbers);
    // echo "<pre>";

    header('Location:cart.php');
}

?>