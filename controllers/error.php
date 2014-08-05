<?php
    class Error extends Controller {
        public function __construct() {
            parent::__construct();
        }
        public function index() {
            $this->view->title = "Error"; 
            $this->view->setMasterPage("views/master_nomenu.php");
            $this->view->renderView(__CLASS__,__FUNCTION__);
        }
    }
?>
