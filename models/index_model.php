<?php
    class Index_Model extends Model{
        public function readUser($uname, $upass) {
            $upass = sha1(md5($upass));
            $result = $this->read("users", "username = '$uname' AND password = '$upass'", "count(*)");
            return $result;
        }
    }
?>

