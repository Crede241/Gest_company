<?php
require_once "model/User.php";
require_once "model/Accounting.php";
require_once "model/Category.php";
require_once "model/Company.php";
require_once "model/Finance.php";
<<<<<<< HEAD
=======
require_once "model/Department.php";
>>>>>>> 22e3733 (initial commit)

use Model\User;
use Model\Accounting;
use Model\Category;
use Model\Company;
use Model\Finance;
<<<<<<< HEAD

function userHomePage(){
    require "view/user/pages/home.php";
}

function user404(){
    require "view/user/pages/404.php";
}

function userLoginPage(){
    require "view/user/pages/login.php";
}
=======
use Model\Department;


$Us = new User();
$Ac = new  Accounting();
$De = new Department();
$Ca= new Category();

function userHomePage()
{
    $company = getMyCompany();
    require "view/user/pages/home.php";
}

function user404()
{
    require "view/user/pages/404.php";
}

function userLoginPage()
{
    require "view/user/pages/login.php";
}

function userLogin($email, $password)
{
    global $Us;
    $email = get_text($email);
    $password = get_text($password);
    $Us->user_login($email, $password);
}

function userSession()
{
    if (isset($_SESSION["id"])) {
        return new User($_SESSION["id"]);
    } else {
        return null;
    }
}

function add_expense($designation, $amount, $category, $type)
{
    global $Ac;
    $add = $Ac->createExpense($designation, $amount, $type, $category);
    if ($add == true) {
        echo toastJson("success", "La dépense a été ajouter avec succès", "Félicitation");
    } else {
        echo toastJson("error", "Une erreur est survenue lors de l'ajout", "Erreur");
    }
}

function getMyDepartment()
{
    global $De;
    $department = $De->userDepartment($_SESSION["id"]);
    return $department;
}

function getMyCompany()
{
    $department = getMyDepartment();
    return $Co = new  Company($department["id_company"]);
}

function getExpenses($user)
{
    global $Ac;
    $company = intval(getMyCompany()->getId());
    $expense = $Ac->getAccountingType($company, 0);
    return $expense;
}

function getInformation($id_user)
{
    global $Us;
    $sel = $Us->selectById($id_user);
    return $sel;
}

function updateExpense($id_account, $designation, $amount, $category, $type)
{
    global $Ac;
    $up = $Ac->updateAccounting($id_account, $designation, $amount, $category, $type);
    if ($up == true) {
        echo toastJson("success", "La modification a été  avec succès", "Félicitation");
    } else {
        echo toastJson("error", "Une erreur est survenue lors de l'ajout", "Erreur");
    }
}

function deleteExpense($id_account)
{
    global $Ac;
    if (isset($id_account)) {
        $id_account = intval($id_account);
        if ($id_account < 1) {
            redirect_to("../../expense");
        } else {
            $del = $Ac->deleteAccounting($id_account);
            redirect_to("../../expense");
        }

    }
}

function updateUser($id_user, $first_name, $last_name, $phone_user)
{
    global $Us;
    $up = $Us->updateProfile($id_user, $first_name, $last_name, $phone_user);
    if ($up == true) {
        echo toastJson("success", "Les informations ont été modifié avec succès", "Félicitation");
    } else {
        echo toastJson("error", "Désolés, un problème est survenu. Merci de réessayer.", "Erreur");
    }

}

function updatePassword($id_user, $old_password, $password)
{
    global $Us;
    $id_user = intval($id_user);
    $old_password = get_text($old_password);
    $password = get_text($password);
    $up = $Us->changePassword($id_user, $old_password, $password);
    if ($up == true) {
        echo toastJson("success", "Le mot de passe a été modifié avec succès", "Félicitation");
    } else {
        echo toastJson("error", "Désolés, un problème est survenu. Merci de réessayer.", "Erreur");
    }
}

>>>>>>> 22e3733 (initial commit)
