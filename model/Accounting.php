<?php
namespace Model;

require_once "Company.php";

use Model\DataBase;
use Model\Company;


class Accounting extends DataBase
{
    private $id;
    private $category;
    private $company;
    private $designation;
    private $amount;
    private $date;
    private $hour;
    private $status;
    protected $type;

    public function createExpense($designation, $amount, $type, $category)
    {
        $De = new Department();
        $dep = $De->userDepartment($_SESSION['id']);
        $Co = new Company($dep["id_company"]);
        $category = intval($category);
        $company = intval($Co->companyUser($_SESSION["id"])["id_company"]);
        $designation = htmlspecialchars($designation);
        $amount = intval($amount);
        $type = intval($type);
        $date = date("Y-m-d");
        $hour = date("H:i:s");
        $reference = $this->random_matri(8);
        $bdd = $this->connect();
        $insert = $bdd->prepare("INSERT INTO accounting (id_cat,id_company,reference_account,designation_account,amount_account,date_account,hour_account,status_account,type_account) VALUES(?,?,?,?,?,?,?,?,?) ");
        $in = $insert->execute(array($category, $company, $reference, $designation, $amount, $date, $hour, 0, $type));
        if ($in == true) {
            $actualFunds = $Co->getFunds();
            $newFunds=intval($actualFunds-$amount);
            $Co->setFunds($newFunds);
            return true;
        } else {
            die("Une erreur est survenue lors de l'ajout de votre dépense si le problème persiste veillez contacter votre dévellopeur");
        }
    }

    public function getAccountingType($company, $status)
    {
        $id = $_SESSION['id'];
        $company = intval($company);
        $status = intval($status);
        $bdd = $this->connect();
        $accounting = $bdd->query("SELECT * FROM accounting WHERE id_company=$company AND status_account=$status");
        return $accounting->fetchAll();
    }

    public function updateAccounting($id_account,$designation,$amount,$category,$type)
    {
        $bdd = $this->connect();
        $id_account = htmlspecialchars($id_account);
        $designation = htmlspecialchars($designation);
        $amount = htmlspecialchars($amount);
        $category = htmlspecialchars($category);
        $type = htmlspecialchars($type);
        $up = $bdd->prepare("UPDATE accounting SET designation_account=?, amount_account=?, id_cat=?, type_account=? WHERE id_account=?");
        $ok = $up->execute(array($designation, $amount, $category, $type, $id_account));
        if ($ok == true) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteAccounting($id_account)
    {
        $bdd= $this->connect();
        $id_account=intval($id_account);
        $del=$bdd->query("DELETE FROM accounting WHERE id_account=$id_account");
        if ($del==true) {
            return true;
        }else {
            return false;
        }

    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param mixed $company
     */
    public function setCompany($company)
    {
        $this->company = $company;
    }

    /**
     * @return mixed
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * @param mixed $designation
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getHour()
    {
        return $this->hour;
    }

    /**
     * @param mixed $hour
     */
    public function setHour($hour)
    {
        $this->hour = $hour;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

}