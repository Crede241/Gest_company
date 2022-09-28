<?php
namespace Model;

require_once "Department.php";

use Model\DataBase;
use Model\Department;

class Company extends DataBase
{
    private $id;
    private $name;
    private $address;
    private $contact;
    private $email;
    private $funds;

    public function __construct($id)
    {
        $id=intval($id);
        $bdd=$this->connect();
        $select=$bdd->query("SELECT * FROM `funds`F, `companies`C WHERE C.id_company=$id AND C.id_company=F.id_company");
        $company=$select->fetch();
        $this->setId($id);
        $this->setName($company["name_company"]);
        $this->setAddress($company["address_company"]);
        $this->setContact($company["contact_company"]);
        $this->setEmail($company["email_company"]);
        $this->setFunds($company["balance_fund"]);
    }

    public function companyUser($id_user)
    {
        $id_user=intval($id_user);
        $Dep=new Department();
        $department=$Dep->userDepartment($id_user);
        $bdd=$this->connect();
        $select=$bdd->query("SELECT * FROM companies WHERE id_company=".$department["id_company"]);
        return $select->fetch();
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param mixed $contact
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getFunds()
    {
        return $this->funds;
    }

    /**
     * @param int $funds
     */
    public function setFunds(int $funds)
    {
        $bdd = $this->connect();
        $up = $bdd->query("UPDATE funds SET balance_fund = $funds");
        $this->funds = $funds;
    }

}