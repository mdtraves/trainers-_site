<?php
    session_start();
    if(!isset($_SESSION['admin'])){
        header("Location:index.php?page=admin");
    }

?>


<h3>Delete category</h3>
<?php
$delcat_sql = "SELECT * FROM brand";
$delcat_qry = mysqli_query($dbconnect, $delcat_sql);
$delcat_rs = mysqli_fetch_assoc($delcat_qry);

do { ?>
<p><a href="index.php?page=deletecategoryconfirm&brandID=<?php echo $delcat_rs["brandID"]; ?>"><?php echo $delcat_rs["name"]; ?></a></p>
<?php
}
while ($delcat_rs = mysqli_fetch_assoc($delcat_qry));
?>
<hr>
<a href="index.php?page=cpanel"> Back to admin page</a>