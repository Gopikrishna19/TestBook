<?php

class View {
    public $css = array();
    public $js = array();

    public function renderView($controller, $filename='index'){
        $this->controller = $controller;
        require "views/header.php";
        require "views/".$controller."/".$filename.".php";
        require "views/footer.php";
    }
}   

?>
