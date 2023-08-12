<?php

namespace libraries;

use errorManagement;
use mainController;

class boots
{
    function __construct()
    {
        $url= isset($_GET['url']) ? $_GET['url'] : null;
        $url= rtrim($url, "/");
        $url=explode("/", $url);


        /*
         *
         * $url[0] = controllers
         * $url[1] = method
         * $url[2] = param
         *
         */

        if(empty($url[0])){
            require_once "controllers/mainController.php";
            $controller = new mainController();
        }
        else{
            $file = "controllers/" . $url[0] . ".php";
            if(file_exists($file)){
                require_once $file;
                $controller = new $url[0];
                if(isset($url[2])){
                    $controller->{$url[1]}($url[2]);
                }
                else{
                    if(isset($url[1])){
                        $controller->{$url[1]}();
                    }
                }
            }
            else{
                $error = new errorManagement();
            }
        }


}

    }