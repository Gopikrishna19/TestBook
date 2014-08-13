<?php
    class Profile_Model extends Model {

        public $edu = array("Other", "Schooling", "Undergraduate", "Graduate", "Doctorate");
        public $sin = array(-1 => "", 1 => "Single", 0 => "Married");
        public function getUserDetails($id) {
            $result = $this->read("user_data", "uid = $id");
            return isset($result[0]) ? $result[0] : NULL;
        }

        public function updateDetails($id, $data){
            $val = $this->getUserDetails($id);
            if($val == NULL){
                $this->insert('user_data', array('uid'), array($id));
            }
            
            if (!preg_match('%^((19[0-9]{2})|(2[0-9]{3}))[-/.]((0?[0-9])|(1[0-2]))[-/.]([0-3]?[0-9])$%', $data["dob"])) unset($data["dob"]);
            unset($data["submit"]);

            $columns = "";
            foreach($data as $key => $value){
                $columns .= $key."='".mysqli_escape_string($this->conn, $value)."', ";
            }
            $columns = rtrim($columns,", ");

            $this->update('user_data', $columns, "uid = $id");
        }
    }
?>
