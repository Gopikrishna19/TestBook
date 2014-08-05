<?php
    require_once "controllers/error.php";
    
    class Bootloader {
        private $_url = NULL;
    
        public function __construct() {
            $this->getUrl();
            $url = $this->_url;
    
            if(!file_exists("controllers/".$url[0].".php")) {
                $url[0] = "error";
            }
    
            require_once "controllers/".$url[0].".php";
            $controller = new $url[0]();
            $controller->loadModel($url[0]);
    
            $length = sizeof($url);
            $func = "index";

            switch($length) {
                case 3: $param = $url[2];
                case 2: if(method_exists($controller, $url[1])) $func = $url[1];
                        else $controller = new Error();
                        break;
                
            }
            if(isset($param))
            $controller->$func($param);
            else
            $controller->$func();
        }
    
        function getUrl() {
            $url = isset($_GET['url']) ? $_GET['url'] : "index";
            $url = trim($url, '/');
            $url = explode('/', $url);
    
            $this->_url = $url;
        }
    }
?>