<?php
    class Index extends Controller{
        
        public function __construct() {
            parent::__construct();
        }
        public function index() {
            $this->view->title="Login";
            $this->view->setMasterPage("views/master_nomenu.php");
            $this->view->renderView(__CLASS__,__FUNCTION__);
        }
     }
?>
