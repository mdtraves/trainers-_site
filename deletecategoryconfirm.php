<?php
    session_start();
    if(!isset($_SESSION['admin'])){
        header("Location:index.php?page=admin");
    }

?>

<h3>Delete category confirm</h3>
<?php
$delcat_sql = "SELECT * FROM brand WHERE brandID=".$_GET["brandID"];
$delcat_qry = mysqli_query($dbconnect, $delcat_sql);
$delcat_rs = mysqli_fetch_assoc($delcat_qry);

// check stock before deleting

$check_sql = "SELECT * FROM stock WHERE brandID=".$_GET["brandID"];
$check_qry = mysqli_query($dbconnect, $check_sql);
$count = mysqli_num_rows($check_qry);
?>

<p><?php
    if ($count > 0){
         ?><span style="color: red;">Warning! </span><?php echo "there are ".$count." stock item(s) in this brand. If you delete the brand, they will also be removed from the database.";
    }
    ?></p><br>


<p><?php echo "Do you really want to delete ". $delcat_rs["name"]."?"; ?></p>
<p><a href="index.php?page=deletecategory&brandID=<?php echo $_GET["brandID"]; ?>">Yes, delete it</a> | <a href="index.php?page=deletecategoryselect"> No, go back</a> | <a href="index.php?page=cpanel"> Back to admin page</a></p>