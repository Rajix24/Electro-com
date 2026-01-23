<?php
namespace App\Core;
class Router {


    public static function dispatcher(){
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);            
        if ($uri == '/') {
                require_once 'app/View/home.php';
                return;
            }
            
            $new = new self();
            $response = $new->resolveURI($uri);
            $new->execute($response);
        }
        public function resolveURI($uri){
            $uriArray = explode('/', $uri);
            $controller = $uriArray[1];
            $method = $uriArray[2];
            return [
                'controller'=> $controller,
                'method' => $method
                ] ;
        }


    public function execute(array $response)
    {
        if($response['method'] == NULL){
            die();
        }
        if (!isset($response['controller'], $response['method'])) {
            echo 'invalide route response';
        }
        $controller = "App\\Controller\\" . $response['controller'];
        if (!class_exists($controller)) {
            echo 'invalide controller  response <br>';            
        }
        $instance = new $controller();
        if (!method_exists($instance, $response['method'])) {
            echo 'invalide methode ';
        }
        return call_user_func([$instance, $response['method']]);
    }

}