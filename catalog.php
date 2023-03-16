<?php
    session_start();
    require_once("E:\xamp\htdocs\Projekt_strona\komis-samochodowy2-2\conn.php");

    $con = @new mysqli($host, $db_user, $db_password, $db_name);
    if(!$con){
        echo("nie działa");
    } else{
        echo("działa");
    }
?>