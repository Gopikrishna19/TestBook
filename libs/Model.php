<?php
class Model extends Database {
    public function __construct(){
        parent::__construct();
    }

    public function read($table, $cond = NULL, $fields = "*") {
        $cond = $cond ? " WHERE ".$cond : "";

        $query = "SELECT ".$fields." FROM ".$table.$cond;
        $result = mysqli_query($this->conn, $query);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
}
?>

