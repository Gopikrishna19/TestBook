<?php
    class Index extends Controller{
        
        public function __construct() {
            parent::__construct();
        }
        public function index() {
            $this->view->renderView(__CLASS__,__FUNCTION__);
             }
       
        public function get($id=NULL){
            
            if($id!=NULL)
                $this->view->id = $id;
            $this->view->renderView(__CLASS__,__FUNCTION__);
            
        }
     }
?>
