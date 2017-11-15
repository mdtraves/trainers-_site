<?php
    session_start();
    if(!isset($_SESSION['admin'])){
        header("Location:index.php?page=admin");
    }
    $delcat_sql = "DELETE FROM brand WHERE brandID=".$_GET["brandID"];
    $delcat_qry = mysqli_query($dbconnect, $delcat_sql);

    $delstock_sql = "DELETE FROM stock WHERE brandID=".$_GET["brandID"];
    $delstock_qry = mysqli_query($dbconnect, $delstock_sql);

?>

<h1>Delete Brand</h1>
<p>Item has been deleted</p>
<a href="index.php?page=cpanel">Return to admin panel</a>