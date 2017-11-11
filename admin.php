<?php
    session_start();

    if(isset($_POST["login"])){
        $login_sql="SELECT * FROM user WHERE username = '"$_POST["username"]."' AND password='.sha1("$_POST["password"])."'";

    if(isset($_SESSION["admin"])){
        include("cpanel.php");
    }
    else {
        include("login.php");
    }


?>

