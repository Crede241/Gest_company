<?php
require_once "model/User.php";
require_once "model/Accounting.php";
require_once "model/Category.php";
require_once "model/Company.php";
require_once "model/Finance.php";

use Model\User;
use Model\Accounting;
use Model\Category;
use Model\Company;
use Model\Finance;

function userHomePage(){
    require "view/user/pages/home.php";
}

function user404(){
    require "view/user/pages/404.php";
}

function userLoginPage(){
    require "view/user/pages/login.php";
}