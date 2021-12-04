<?php
     require_once('connection.php');
     $id = (isset($_GET['id']) ? $_GET['id']:0);
     $sql = "DELETE FROM categories WHERE id=$id ";
     $status = $conn -> query($sql);
     var_dump($status);
     if($status == true) {
         header('Location:blank.php');
         setcookie('delete_smg',true,time() +10);
     }else {
         setcookie('delete_smg',false,time() +10);
     };
     header('Location:blank.php');
?>