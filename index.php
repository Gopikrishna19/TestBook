<?php
require "common/config.php";

function __autoload($class){
    require "libs/".$class.".php";
}
new Bootloader();

?>