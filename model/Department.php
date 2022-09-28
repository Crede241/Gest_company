<?php


namespace Model;


class Department extends DataBase
{
    private $id;
    private $name;
    private $company;

    public function companyDepartment($company)
    {
        $company=intval($company);
        $bdd=$this->connect();
        $department=$this->selectOne($company);
        $id_company=intval($department["id_company"]);
        $select=$bdd->query("SELECT * FROM companies WHERE id_company=$id_company");
        return $select->fetch();
    }

    public function userDepartment($user)
    {
        $user=intval($user);
        $bdd=$this->connect();
        $select=$bdd->query("SELECT * FROM  `department`D,`users`UD WHERE UD.id_user=$user AND D.id_department=UD.id_department");
        return $select->fetch();
    }

    public function selectOne($id)
    {
        $id=intval($id);
        $bdd=$this->connect();
        $select=$bdd->query("SELECT * FROM department WHERE id_department=$id");
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
}