<?php


namespace Model;


class DataBase
{
    private $userName="root";
    private $password="";
    private $dataBase="balance";

    /**
     * DataBase constructor.
     */
    public function connect()
    {
        $dataBase=$this->dataBase;
        $userName=$this->userName;
        $password=$this->password;
        return $bdd=new \PDO("mysql:host=localhost;dbname=$dataBase;charset=utf8",$userName,$password);
    }


}