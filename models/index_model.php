<?php
    class Index_Model extends Model{
        public function readUser($email, $upass) {
            $upass = sha1(md5($upass));
            $result = $this->read("users", "email = '$email' AND password = '$upass'", "count(*)");
            return $result;
        }

        public function createUser($uname,$upass,$email){
            $upass = sha1(md5($upass));
            $this->insert("users",array("username","password","email"),array($uname,$upass,$email));

            
        }
    }
?>

