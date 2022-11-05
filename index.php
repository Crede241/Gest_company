<?php
//Initiliser la session.
session_start();
require_once "controller/appController.php";
require "controller/userController.php";
require "controller/pageController.php";
require "controller/adminController.php";


$p = "";
on_off();
if (isset($_GET['p']))
{
    $p = explode("/", $_GET['p']);

    if ($p[0] == "home")
    {
        userHomePage();
    }
    elseif ($p[0] == "login" && !isset($p[1]))
    {
        userLoginPage();
    }
    elseif ($p[0] == "login" && isset($p[1]) && $p[1] == "auth")
    {
        userLogin($_POST['email'], $_POST['password']);
    }
    elseif ($p[0] == "logout")
    {
        logout();
    }
    elseif ($p[0] == "company")
    {
        userCompanyPage();
    }
    elseif ($p[0] == "finance")
    {
        userFinancePage();
    }
    elseif ($p[0] == "users" && $_SESSION['role']==1)
    {
        if (isset($p[1]))
        {
            if ($p[1] == "add")
            {
                add_users($_POST["first_name"], $_POST["last_name"], $_POST["email_user"], $_POST["phone_user"], $_POST["password_user"], $_POST["role_user"]);
            }
            elseif ($p[1] == "delete")
            {
                $id = $p[2];
                deleteInfoUser($id);
            }
            elseif ($p[1] == "update")
            {
                $id = $p[2];
                updateUsersInfo($id, $_POST["first_name"], $_POST["last_name"], $_POST["email_user"], $_POST["phone_user"], $_POST["password_user"], $_POST["role_user"]);
            }
        }
        else
        {
            usersPage();
        }
    }
    elseif ($p[0] == "department")
    {
        department();
    }
    elseif ($p[0] == "category" && $_SESSION['role']==1)
    {
        if (isset($p[1]))
        {
            if ($p[1] == "add")
            {
                add_category($_POST["cat"]);
            }
            elseif ($p[1] == "update")
            {
                $id = $p[2];
                updateCategories($id, $_POST["cat"]);
            }
            elseif ($p[1] == "delete")
            {
                $id = $p[2];
                deleteCategories($id);

            } else {
                redirect_to("../category");
            }
        } else {
            userCategoryPage();
        }
    }
    elseif ($p[0] == "profile")
    {
        if (isset($p[1]))
        {
            if ($p[1] == "edit")
            {
                if (isset($p[2]))
                {
                    $id = $p[2];
                    updateUser($id, $_POST["first_name"], $_POST["last_name"], $_POST["phone"]);
                }
                else
                {
                    redirect_to("../profile");
                }
            }
            elseif ($p[1] == "edit-password")
            {
                updatePassword($_SESSION['id'], $_POST["old_password"], $_POST["new_password"]);
            }
            else
            {
                redirect_to("../profile");
            }
        }
        else
            {
            userPage();
        }
    }
    elseif ($p[0] == "accounting" && $p[1] == "income" && $_SESSION['role']==2)
    {
        userIncomePage();
    }
    elseif ($p[0] == "accounting" && $p[1] == "expense")
    {
        if (isset($p[2]) && $p[2] == "add")
        {
            add_expense($_POST["designe"], $_POST["montant"], $_POST["cat"], $_POST["type"]);
        }
        elseif (isset($p[2]) && $p[2] == "update")
        {
            $id = $p[3];
            updateExpense($id, $_POST["designe"], $_POST["montant"], $_POST["cat"], $_POST["type"]);
        }
        elseif (isset($p[2]) && $p[2] == "delete")
        {
            $id = $p[3];
            deleteExpense($id);
        }
        elseif (!isset($p[2]))
        {
            userExpensePage();
        }
        else
            {
            user404();
        }
    }
    else {
        user404();
    }
}
else {
    userHomePage();
}