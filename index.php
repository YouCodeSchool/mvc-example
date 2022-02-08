<?php

define("ROOT", dirname(__FILE__));

require_once ROOT  . '/app/Model.php';
require_once ROOT  . '/app/Controller.php';

$params = explode('/', $_GET['p']);

if($params[0]){
    $controller = ucfirst(strtolower($params[0]));

    $action = isset($params[1]) ? $params[1] : 'index';

    if(file_exists(ROOT . '/controllers/' . $controller.'.php')){

        require_once ROOT . '/controllers/' . $controller.'.php';

        $controller = new $controller();

        if(method_exists($controller, $action)) {
            unset($params[0]);
            unset($params[1]);
            $params = $params ? array_values($params) : [];
            call_user_func_array([$controller, $action], $params);
        }else{
            http_response_code(404);
            echo "page n'existe pas";
        }
    }


}else{}