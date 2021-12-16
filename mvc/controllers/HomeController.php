<?php
class HomeController{
    public function index(){
        echo "home";
        require_once('views/home/index.php');
    }
}