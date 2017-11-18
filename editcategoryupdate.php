<?php
    session_start();
    if(!isset($_SESSION['admin'])){
        header("Location:index.php?page=admin");
    }

    $editcat_sql = "UPDATE brand SET name='".$_SESSION["editcategory"]["name"]."'WHERE brandID=".$_SESSION["editcategory"]["brandID"];
    $editcat_qry=mysqli_query($dbconnect, $editcat_sql);

unset($_SESSION["editcategory"]);
?>

<h1>This is the edit category update!</h1>
<h3> category updated .</h3>
<a href="index.php?page=cpanel">Back to control panel</a>