<?php
    class Database {
        public function __construct() {
            $this->conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        }
    }
?>