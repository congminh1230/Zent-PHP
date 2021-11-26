<?php
session_start();
$products = array();
$key = array();
if (isset($_SESSION['products'])) {
  $products = $_SESSION['products'];
  $key = $_GET['id'];
  $product =$products[$key];
  $product['product_amount'] = 1;
  $_SESSION['cart'][]=$product;
  header('Location:cart.php');
}

?>
