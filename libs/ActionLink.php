<?php


class ActionLink{
    public static function create($link, $controller, $action = NULL, $param = NULL, $query = NULL, $class = "", $id = "", $style = ""){
        $action = $action != NULL ? "/$action" : "";
        $param = $param != NULL ? ($action != NULL ? "/$param" : "/index/$param") : "";
        $query = $query != NULL ? "?".http_build_query($query) : "";

        echo "<a href='/$controller$action$param$query' class='$class' id='$id' style='$style'>$link</a>";
    }
}
?>
