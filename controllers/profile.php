<?php
class Profile extends Controller{
    public function __construct(){
        parent::__construct();
        if(!Session::Auth())
            header("Location: /");
    }

    public function index(){
       if(isset($_GET['id'])){
           $id = $_GET['id'];
       }
       else{
           $id = Session::getKey('id');
       }
       $this->view->id = $id;
       $this->view->title = "Profile";
       $this->view->renderView(__CLASS__,__FUNCTION__);
    }
}
?>

