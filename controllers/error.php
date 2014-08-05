<?php
    class Error extends Controller {
        public function __construct() {
            parent::__construct();
        }
        public function index() {
            $this->view->title = "Error"; 
            $this->view->setMasterPage("master_nomenu");
            $this->view->renderView(__CLASS__,__FUNCTION__);
        }
    }
?>
