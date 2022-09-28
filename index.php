<?php
//Initiliser la session.
session_start();

require "controller/userController.php";
require "controller/pageController.php";

$p="";
if (isset($_GET['p'])){
    $p=explode("/",$_GET['p']);

    if($p[0]=="home"){
        userHomePage();
    }elseif ($p[0]=="login"){
        userLoginPage();
    }else{
        user404();
    }
}else{
    userHomePage();
}