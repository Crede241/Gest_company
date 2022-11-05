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

$Ad = new User();

function adminHomePage()
{
    require "view/admin/pages/home.php";
}

function admin404()
{
    require "view/admin/pages/404.php";
}

function adminLoginPage()
{
    require "view/admin/pages/login.php";
}

function adminLogin($email, $password)
{
    global $Ad;
    $email = get_text($email);
    $password = get_text($password);
    $Ad->user_login($email, $password);
}

function adminSession()
{
    if (isset($_SESSION["id"])) {
        return new User($_SESSION["id"]);
    } else {
        return null;
    }
}

function add_category($reference)
{
    global $Ca;
    $add = $Ca->createCategory($reference);
    if ($add == true) {
        echo toastJson("success", "La categories a été ajouter avec succès", "Félicitation");
    } else {
        echo toastJson("error", "Une erreur est survenue lors de l'ajout", "Erreur");
    }
}

function add_users($first_name, $last_name, $email, $phone, $password,$role)
{
    global $Us;
    $add = $Us->createUser($first_name, $last_name, $email, $phone, $password,$role);
    if ($add == true) {
        echo toastJson("success", "Utilisateurs a été ajouter avec succès", "Félicitation");
    } else {
        echo toastJson("error", "Une erreur est survenue lors de l'ajout", "Erreur");
    }
}

function deleteInfoUser($id_user)
{
    global $Us;
    if (isset($id_user)) {
        $id_user = intval($id_user);
        if ($id_user < 1) {
            redirect_to("../../users");
        } else {
            $del = $Us->deleteUsers($id_user);
            redirect_to("../../users");
        }

    }
}

function updateCategories($id_cat, $reference_cat)
{
    global $Ca;
    $up = $Ca->updateCategory($id_cat, $reference_cat);
    if ($up == true) {
        echo toastJson("success", "Modification effectuée avec succès", "Félicitation");
    } else {
        echo toastJson("error", "Une erreur est survenue lors de l'ajout", "Erreur");
    }
}

function updateUsersInfo($id_user,$first_name, $last_name, $email, $phone, $password,$role)
{
    global $Us;
    $up = $Us->updateUsers($id_user,$first_name, $last_name, $email, $phone, $password,$role);
    if ($up == true) {
        echo toastJson("success", "Modification effectuée avec succès", "Félicitation");
    } else {
        echo toastJson("error", "Une erreur est survenue lors de l'ajout", "Erreur");
    }
}

function deleteCategories($id_cat)
{
    global $Ca;
    if (isset($id_cat)) {
        $id_cat = intval($id_cat);
        if ($id_cat < 1) {
            redirect_to("../category");
        } else {
            $del = $Ca->deleteCategory($id_cat);
            redirect_to("../category");
        }

    }
}



