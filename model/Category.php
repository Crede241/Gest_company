<?php
namespace Model;

use Model\DataBase;

class Category extends DataBase
{
    private $id;
    private $reference;

    public function getAll()
    {
        $bdd = $this->connect();
        $select = $bdd->query("SELECT * FROM categories");
        return $select->fetchAll();
    }

    public function createCategory($reference)
    {
        $bdd = $this->connect();
        $insert = $bdd->prepare("INSERT INTO categories(reference_cat) VALUES (?)");
        $in = $insert->execute(array($reference));
        if ($in == true) {
            return true;
        } else {
            return false;
        }

    }

    public function updateCategory($id_cat, $reference_cat)
    {
        $bdd = $this->connect();
        $up = $bdd->prepare("UPDATE categories SET reference_cat=? WHERE id_cat=?");
        $ok = $up->execute(array($reference_cat, $id_cat));
        if ($ok == true) {
            return true;
        } else {
            return false;
        }

    }

    public function deleteCategory($id_cat)
    {
        $bdd = $this->connect();
        $del = $bdd->query("DELETE FROM categories WHERE id_cat=$id_cat");
        $set = $bdd->query("SET @num := 0");
        $up=$bdd->query("UPDATE categories SET id_cat = @num := (@num+1)");
        $alter=$bdd->query("ALTER TABLE categories AUTO_INCREMENT =1");
        if ($del == true) {
            return true;
        } else {
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
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param mixed $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

}
