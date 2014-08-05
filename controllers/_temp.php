<?php
class Profile extends Controller{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
    
    $this->view->renderView(__CLASS__,__FUNCTION__);    
    }

}
?>

