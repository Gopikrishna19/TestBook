<?php
    class Error extends Controller {
        private $error_list = array(
            400 => "Bad Request",
            401 => "Unauthorized",            
            404 => "Resource Not Found",
            408 => "Request Timeout",
            410 => "Resouce no longer exists",
            420 => "Method Failure",
            500 => "Internal Server Error",
            503 => "Service Unavailable"
        );

        public function __construct($num) {
            parent::__construct();
            $this->num = $num ? $num : 404;
        }

        public function index() {
            $this->view->title = "Error"; 
            $this->view->num = $this->num;
            $this->view->message = $this->error_list[$this->num];

            $this->view->css[] = "error";
            $this->view->setMasterPage("master_nomenu");

            $this->view->renderView(__CLASS__,__FUNCTION__);
        }
    }
?>
