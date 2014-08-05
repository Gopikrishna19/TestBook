<?php

class View {
    public $css = array();
    public $js = array();

    private $masterpage = "views/master.php";

    public function renderView($controller, $filename='index', $masterpage = TRUE){
        $this->controller = $controller;
        if($masterpage) {
            $this->content = file_get_contents("views/".$controller."/".$filename.".php");
            require $this->masterpage;
        } else {
            require "views/".$controller."/".$filename.".php";
        }
    }

    public function setMasterPage($masterpage) {
        $this->masterpage = $masterpage;
    }
}   

?>
