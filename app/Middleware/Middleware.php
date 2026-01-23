<?php
namespace App\Middleware;
class Middleware{
    public function checkrole($role){
        if ($role == 'admin') {
            require_once 'app/View/admin.php';
            exit();
        }elseif($role== 'user'){
            require_once 'app/View/client.php'; 
            exit();

        }else{
            header('location: /singup');
            return;
        }
    }
}