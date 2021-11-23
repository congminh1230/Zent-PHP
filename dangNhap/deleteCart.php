<?php
    session_start();
    $products = array();
    if (isset($_SESSION['cart'])) {
      $product_in_cart = $_SESSION['cart'];

      if($_SESSION['cart'][ $_GET['id']]['product_amount'] > 1  ) {
        $_SESSION['cart'][ $_GET['id']]['product_amount'] -=1;
        header('Location:cart.php');
      }else {
        unset($_SESSION['cart'][ $_GET['id']]);
        header('Location:cart.php');
      }
      
    }
    





    

?>