<?php
    class Index extends Controller{
        
        public function __construct() {
            parent::__construct();
            if(Session::Auth()){
                header("Location: /profile");
            }
        }
        public function index() {
            $this->view->title="Login";
            $this->view->css[] = "login";
            $this->view->setMasterPage("master_nomenu");

            $this->view->renderView(__CLASS__,__FUNCTION__);
        }

        public function xhrLogin() {
             $arr = $this->model->readUser($_REQUEST['uname'], $_REQUEST['upass']);
             if($arr[0]['count(*)']>0) {
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
            header("Location: /");
        }
     }
?>
