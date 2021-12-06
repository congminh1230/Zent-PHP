<?php
    require_once('config.php');
    // var_dump( require_once('config.php'));
    class Connection{
        var $conn;
        function __construct() {
            $this->conn = new mysqli(HOST,USER,PASSWORD,DB_NAME);
            $this-> conn-> set_charset('utf8');
            if($this->conn->connect_error) {
                die('Connection failed:'.$this->conn->error);
            }
        }
        function getConn() {
            return $this->conn;
        }
    }
    $obj = new Connection() ;
    // $conns = $obj->getConn();
    // var_dump($conns);
    // $sql = "SELECT * FROM categories ";
    // $result = $conns -> query($sql);
    // $categories = array();
    // while ($row = $result->fetch_assoc()) {
    //     $categories[] = $row;
    // }
    // echo "<pre>";
    //     print_r($categories);
    // echo "</pre>";

?>