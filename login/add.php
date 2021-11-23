<?php

    session_start();
    // $info = array();
    $info = $_POST;
    $_SESSION ['infos'][] = $info;
    // echo "<pre>";
    //     print_r($info);
    // echo "</pre>";
    header('Location: info-list.php')


?>