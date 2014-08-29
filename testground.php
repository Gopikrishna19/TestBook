<?php
    include "common/config.php";
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    $array = array(1, 2, 3);
    echo "<pre>";
    print_r($array);
    $join = join(',', array_fill(0, count($array), '?'));
    print_r($join);
    $select = "SELECT * FROM users WHERE id IN ($join);";
    echo "<br>$select";
    $statement = mysqli_prepare($conn, $select);
    $statement->bind_param(str_repeat('i', count($array)), $array);
    print_r($statement);

    $db = new mysqli();
    print_r($db);
    var_dump($db);
?>