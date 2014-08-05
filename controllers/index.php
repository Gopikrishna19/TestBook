<?php
    class Index extends Controller{
        
        public function __construct() {
            parent::__construct();
            if(Session::Auth()){
                header("Location: ../profile");
            }
        }
        public function index() {
            $this->view->title="Login";
            $this->view->setMasterPage("views/master_nomenu.php");
            $this->view->renderView(__CLASS__,__FUNCTION__);
        }

        public function xhrLogin() {
            if($_REQUEST['uname']=="admin" && $_REQUEST['upass']=="gpmk") {
                Session::init();
                Session::setKey('uname', $_REQUEST['uname']);
                Session::setKey('id', 1);
                echo "yes";
            } else {
                echo "no";
            }
        }
        public function logout(){
            Session::destroy();
            header("Location: ../");
        }
     }
?>
