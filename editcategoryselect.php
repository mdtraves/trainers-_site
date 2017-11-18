<?php
    session_start();
    if(!isset($_SESSION['admin'])){
        header("Location:index.php?page=admin");
    }
    unset($_SESSION["editcategory"]);
    $editcat_sql = "SELECT * FROM brand";
    $editcat_qry=mysqli_query($dbconnect, $editcat_sql);
    $editcat_rs = mysqli_fetch_assoc($editcat_qry);
?>

<h1>This is the edit category page! </h1>
<h3>Edit category here.</h3>
<?php
do { ?>
    <p><a href="index.php?page=editcategory&brandID=<?php echo $editcat_rs["brandID"]; ?>"><?php echo $editcat_rs["name"]; ?></a></p>
<?php
}
while ($editcat_rs = mysqli_fetch_assoc($editcat_qry));
?>
