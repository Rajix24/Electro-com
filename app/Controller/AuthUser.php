<?php
namespace App\Controller;
use App\Middleware\Middleware;
use App\Models\User;
class AuthUser{
    public function show ($var){
        echo '<pre>';
        var_dump($var);
        echo '</pre>';
        echo "testing";
        die();
    }
    public function signUp(){
        $user = new User();
        $user->setName(  $_POST['username']);
        $user->setEmail(  $_POST['email']);
        $user->setPass(  $_POST['password']);
        $user->save();
        $user_data = $user->findOne($_POST['email']);
        session_start();
        $_SESSION['id'] = $user_data->getId();
        $_SESSION['username'] = $user_data->getName();
        $_SESSION['role'] = $user_data->getRole();
        $_SESSION['email'] = $user_data->getEmail();
        $role = new Middleware();
        $role->checkrole($_SESSION['role']);
    }
    public function login(){
        $user = new User();
        $data = $user->findOne($_POST['email']);
        if ($data->getEmail() == null ) {
            header("location: /login?error= account not found");
            return;
        }
        session_start();
        $_SESSION['id'] = $data->getId();
        $_SESSION['username'] = $data->getName();
        $_SESSION['email'] = $data->getEmail();
        $_SESSION['role'] = $data->getRole();
        $role = new Middleware();
        $role->checkrole($data->getRole());
    }
    public function logout(){
        session_start();
        $_SESSION = [];
        session_unset();
        session_destroy();
        header("location: /");
        exit;
    }

}