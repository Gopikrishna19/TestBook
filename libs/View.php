<?php

class View {
    public $css = array();
    public $js = array();

    private $header = "views/master/header.php";
    private $footer = "views/master/footer.php";

    public function renderView($controller, $filename='index', $masterpage = TRUE){
        $this->controller = $controller;
        if($masterpage) {
            require $this->header;
            require "views/".$controller."/".$filename.".php";
            require $this->footer;
        } else {
            require "views/".$controller."/".$filename.".php";
        }
    }

    public function setMasterPage($masterpage) {
        $this->header = "views/$masterpage/header.php";
        $this->footer = "views/$masterpage/footer.php";
    }
}   

?>
