<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location:index.php?page=admin");
}
if(!isset($_SESSION["addcategory"]["name"])) {
    header("Location:index.php?page=admin");
}
?>

<h3>enter category page</h3>

<?php
$newcategory_sql = "INSERT INTO brand (name) VALUES ('".mysqli_real_escape_string($dbconnect, $_SESSION["addcategory"]["name"])."')";
$newcategory_qry = mysqli_query($dbconnect , $newcategory_sql);
unset($_SESSION["addcategory"]["name"]);

?>

<h3>New cateogory has been entered</h3>
<a href="index.php?page=admin">Return to admin page</a>
