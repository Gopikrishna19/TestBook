<?php


class ActionLink{
    public static function create($text,$controller,$action="",$param="",$class="", $id=""){
        echo "<a href='$controller/$action".($param==""?"":"/$param")."' class=$class id=$id>$text</a>";
    }
}
?>
