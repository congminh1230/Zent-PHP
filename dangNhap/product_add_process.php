<?php
session_start();
$products = $_POST;
$_SESSION['products'][] = $products;
// $products = array();
// if (isset($_SESSION['products'])) {
//   $products = $_SESSION['products'];
// }
// echo "<pre>";
//       print_r($products);
// echo "</pre>";
header('Location:product_list.php');


?>