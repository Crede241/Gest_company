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
    protected function connect()
    {
        $dataBase=$this->dataBase;
        $userName=$this->userName;
        $password=$this->password;
        return $bdd=new \PDO("mysql:host=localhost;dbname=$dataBase;charset=utf8",$userName,$password);
    }

    public function random_matri($val)
    {

        $letter=['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','0','1','2','3','4','5','6','7','8','9'];

        $matri=[];
        for ($i=0; $i < $val ; $i++) {

            $il=array_rand($letter);
            array_unshift($matri,$letter[$il]);
        }

        $out = implode("",$matri);
        return $out;
    }
}