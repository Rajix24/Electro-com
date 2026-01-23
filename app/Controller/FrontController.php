<?php
namespace App\Controller;
class FrontController{
    public function admin(){
        require_once 'app/View/admin.php';
        exit();
    }
    public function client(){
        require_once 'app/View/client.php';
        exit();
    }   

    public function cart(){
        require_once 'app/View/cart.php';
        exit();
    }
    public function logIn(){
        require_once 'app/View/logIn.php';
        exit();
    }
    public function signUp(){
        require_once 'app/View/signUp.php';
            exit();
    }
}