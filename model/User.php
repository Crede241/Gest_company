<?php 
namespace Model;

require_once "DataBase.php";
use Model\DataBase;

class User extends DataBase
{
    private $id;
    private $firstName;
    private $lastName;
    private $email;
    private $phone;
    private $password;
    private $role;

    public function __construct($id = "")
    {
        if (empty($id) || intval($id) < 1) {
            $this->id = null;
        } else {
            $id = intval($id);
            $user = $this->fetch_info($id);

            $this->id = $id;
            $this->setFirstName($user["first_name"]);
            $this->setLastName($user["last_name"]);
            $this->setEmail($user["email_user"]);
            $this->setPhone($user["phone_user"]);
            $this->setPassword($user["password_user"]);
            $this->setRole($user["role_user"]);
        }
    }

    public function fetch_info($id)
    {
        $id = intval($id);
        $connect = $this->connect();
        $check = $connect->prepare("SELECT * FROM users WHERE id_user=?");
        $check->execute(array($id));
        return $check->fetch();
    }

    public function getAll_User()
    {
        $bdd = $this->connect();
        $select = $bdd->query("SELECT * FROM  users ");
        return $select->fetchAll();
    }

    public function selectPassword($id_user, $password)
    {
        $connect = $this->connect();
        $sql = $connect->prepare("SELECT * FROM users WHERE  id_user=? AND password_user=?");
        $sql->execute(array($id_user, sha1($password)));
        $yes = $sql->rowCount();
        if ($yes == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function createUser($first_name, $last_name, $email, $phone, $password,$role)
    {
        $this->connect();
        $bdd = $this->connect();
        $insert = $bdd->prepare("INSERT INTO users(first_name,last_name,email_user,phone_user,password_user,role_user) VALUES (?,?,?,?,?,?)");
        $in = $insert->execute(array($first_name, $last_name, $email, $phone, sha1($password),$role));
        if ($in == true) {
            return true;
        } else {
            return false;
        }

    }

    public function deleteUsers($id_user)
    {
        $bdd = $this->connect();
        $del = $bdd->query("DELETE FROM users WHERE id_user=$id_user");
        $set = $bdd->query("SET @num := 0");
        $up=$bdd->query("UPDATE users SET id_user = @num := (@num+1)");
        $alter=$bdd->query("ALTER TABLE users AUTO_INCREMENT =1");
        if ($del == true) {
            return true;
        } else {
            return false;
        }

    }

    public function updateUsers($id_user,$first_name, $last_name, $email, $phone, $password,$role)
    {
        $bdd = $this->connect();
        $up = $bdd->prepare("UPDATE users SET first_name=?, last_name=?, email_user=?, phone_user=?, password_user=?, role_user=? WHERE id_user=?");
        $ok = $up->execute(array($first_name, $last_name, $email, $phone, sha1($password),$role, $id_user));
        if ($ok == true) {
            return true;
        } else {
            return false;
        }

    }

    public function changePassword($id_user, $old_password, $password)
    {
        $bdd = $this->connect();
        if ($this->selectPassword($id_user, $old_password)) {
            $up = $bdd->prepare("UPDATE users SET password_user=? WHERE id_user=?");
            $ok = $up->execute(array(sha1($password), $id_user));
            if ($ok == true) {
                return true;
            } else {
                return false;
            }
        } else {
            return null;
        }

    }

    public function user_login($email, $password)
    {
        $connect = $this->connect();
        $sql = $connect->prepare("SELECT * FROM users WHERE email_user=? AND password_user=?");
        $sql->execute(array($email, sha1($password)));
        $yes = $sql->rowCount();
        if ($yes == 1) {
            $info = $sql->fetch();
            $_SESSION['id'] = $info['id_user'];
            $_SESSION['role']= $info['role_user'];
            echo '<div class="alert alert-success" role="alert">Connexion Réussie</div><script>setTimeout("location.href = \'home\';",2000);</script>';
        } else {
            echo '<div class="alert alert-danger" role="alert">Email ou mot passe Incorrect(s)</div>';
            session_destroy();
        }
    }

    public function updateProfile($id_user, $first_name, $last_name, $phone_user)
    {
        $bdd = $this->connect();
        $id_user = htmlspecialchars($id_user);
        $first_name = htmlspecialchars($first_name);
        $last_name = htmlspecialchars($last_name);
        $phone_user = htmlspecialchars($phone_user);

        $up = $bdd->prepare("UPDATE users SET first_name=?, last_name=?,phone_user=? WHERE id_user=?");
        $ok = $up->execute(array($first_name, $last_name, $phone_user, $id_user));
        if ($ok == true) {
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
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
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
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param mixed $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }
}