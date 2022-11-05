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

<<<<<<< HEAD


=======
$Ca=new Category();
$Us=new User();
function userCompanyPage(){
    require "view/user/pages/information-company.php";
}

function userFinancePage(){
    require "view/user/pages/finance-user.php";
}

function userPage(){
    require "view/user/pages/information-user.php";
}

function userIncomePage(){
    require "view/user/pages/income.php";
}
function userExpensePage(){
    global $Ca;
    $categories=$Ca->getAll();
    $expenses=getExpenses($_SESSION['id']);
    require "view/user/pages/expense.php";
}

function usersPage(){
    global $Us;
    $users=$Us->getAll_User();
    require "view/user/pages/users.php";
}
function department (){
    require "view/user/pages/department.php";
}

function userCategoryPage(){
    global $Ca;
    $categories=$Ca->getAll();
    require "view/user/pages/category.php";

}
function categoryInformation(){
    require "view/user/pages/information-category.php";
}
>>>>>>> 22e3733 (initial commit)
