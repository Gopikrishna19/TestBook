<?php
class Profile extends Controller{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
       if(isset($_GET['id'])){
           $id = $_GET['id'];
       }
       else{
           $id = 0;
       }
       $this->view->id = $id;
       $this->view->title = "Profile";
       $this->view->renderView(__CLASS__,__FUNCTION__);
    }
}
?>

