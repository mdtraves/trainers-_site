<?php

 $dbconnect = mysqli_connect("localhost", "root", "", "trainers");
    if(mysqli_connect_errno()){
        echo "connection failed:".mysqli_connect_error();
        exit;
    }
?>