<?php

class View {
    public $css = array();
    public $js = array();
    public $postjs = array();

    private $header = "views/master_profile/header.php";
    private $footer = "views/master_profile/footer.php";

    public function renderView($controller, $filename='index', $masterpage = TRUE){
        $this->controller = $controller;
        if($masterpage) {
            $view = "views/".$controller."/".$filename.".php";
            if(!file_exists($view)) {
                $err = new Error(410);
                $err->index();
                return;
            }
            require $this->header;
            require $view;
            require $this->footer;
        } else {
            require "views/".$controller."/".$filename.".php";
        }
    }

    public function setMasterPage($masterpage) {
        $this->header = "views/$masterpage/header.php";
        $this->footer = "views/$masterpage/footer.php";
    }

    public function checkUserId() {
        return (Session::getKey("id") == $this->id);
    }
}   

?>
