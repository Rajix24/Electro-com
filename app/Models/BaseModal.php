<?php
namespace App\Models; 
use App\Models\User;
use App\Core\Database;
use PDO;

class BaseModal{
    protected $id;
    protected $username;
    protected $email; 
    protected $password;
    protected $role;
    protected string $created_at;

    public function save () {
        $conn = Database::connect();
        $sql = "INSERT INTO users (username, email, password)
        VALUES (:username, :email, :password)"; 
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $this->username);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':password', $this->password);
        $stmt->execute();
    }
    public function findOne($email){
        $conn = Database::connect();
        $sql = 'SELECT * FROM users WHERE email = :email LIMIT 1';
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute(); 
        $stmt->setFetchMode(PDO::FETCH_CLASS, User::class);
        $data = $stmt->fetch();
        return $data;
    }
        public function getALL(){
        $conn = Database::connect();
        $sql = "SELECT * FROM users;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, User::class);
        $data = $stmt->fetchAll();
        return $data;
    }
        public function delete($id){
        $conn = Database::connect();
        $sql = 'DELETE FROM users WHERE id ='.$id;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
        public function update($id){
        $conn = Database::connect();
        $sql = 'UPDATE users SET username = :username, address = :address ,email = :email , password = :password WHERE id = '.$id;
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $this->username);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':password', $this->password);
        $stmt->execute();
    }

}