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
            $this->view->postjs[] = "login";
            $this->view->setMasterPage("master_nomenu");

            $this->view->renderView(__CLASS__,__FUNCTION__);
        }

        public function xhrLogin() {
            $arr = $this->model->readUser($_REQUEST['email'], $_REQUEST['upass']);
            if($arr[0]['count(*)']>0) {
                Session::init();
                Session::setKey('uname', $_REQUEST['email']);
                Session::setKey('id', $arr[0]['id']);
                echo "yes";
            } else {
                echo "no";
            }   
        }

        public function logout(){
            Session::destroy();
            header("Location: /");
        }

        public function register(){
            if(!isset($_POST["register"])){
                $err = new Error(400);
                $err->index();
                die;
            }
            $uname = $_POST["uname"];
            $upass = $_POST["upass"];
            $email = $_POST["email"];
            $this->model->createUser($uname,$upass,$email);

            $this->view->title = "Success";
            $this->view->setMasterPage("master_nomenu");
            $this->view->renderView(__CLASS__,__FUNCTION__);
        }

        public function xhrUserExists() {
            $email = $_REQUEST["email"];
            $arr = $this->model->checkUser($email);            
            if($arr[0]['count(*)']>0) {
                echo "yes";
            } else {
                echo "no";
            }   
        }
     }
?>
