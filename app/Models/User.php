<?php
namespace App\Models;

use App\Models\BaseModal;
class User extends BaseModal{
        public function getName()
    {
        return $this->username;
    }
    public function setName($username)
    {
        $this->username = $username;
        return $this;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }


    public function getPass()
    {
        return $this->password;
    }

    public function setPass($pass)
    {
        $pass = password_hash($pass , PASSWORD_DEFAULT);
        $this->password = $pass;
       return $this;
    }
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
    public function getRole()
    {
        return $this->role;
    } 
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    public function getCreated_at()
    {
        return $this->created_at;
    }

    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }
}