<?php
    session_start();
    if (isset($_SESSION['products'])) {
        $products = $_SESSION['products'];
    }
    $key = $_GET['id'];
    unset($_SESSION['products'][$key]);
    header('Location:product_list.php')

?>