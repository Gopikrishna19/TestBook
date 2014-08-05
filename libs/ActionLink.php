<?php


class ActionLink{
    public static function create($link, $controller, $action = NULL, $param = NULL, $query = NULL, $class = "", $id = ""){
        $action = $action ? "/$action" : "";
        $param = $param ? ($action ? "/$param" : "/index/$param") : "";
        $query = $query ? "?".http_build_query($query) : "";

        echo "<a href='$controller$action$param$query' class='$class' id='$id'>$link</a>";
    }
}
?>
