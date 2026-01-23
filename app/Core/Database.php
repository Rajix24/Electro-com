<?php
namespace App\Core;
use Exception;
use PDO;
class Database{
    private static $conn = null;
    private function __construct(){}

    public static function connect(){
        if (self::$conn == null) {
            try {
                self::$conn = new PDO("mysql:host=db;dbname=electron", 'root', 'root');
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                // echo 'database are connected';
            } catch (Exception $e) {
                echo 'dataBase are not connected to you   '.$e->getMessage();
            }
        }
        return self::$conn;
    } 

}
