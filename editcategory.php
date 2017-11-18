<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location:index.php?page=admin");
}
if (isset($_GET["brandID"])) {
    $_SESSION["editcategory"]["brandID"] = $_GET["brandID"];
}
if(!isset($_SESSION["editcategory"]["name"])) {
    $editcat_sql = "SELECT * FROM brand WHERE brandID=". $_GET["brandID"];
    $editcat_qry = mysqli_query($dbconnect, $editcat_sql);
    $editcat_rs = mysqli_fetch_assoc($editcat_qry);
    $_SESSION["editcategory"]["name"] = $editcat_rs["name"];
}
?>

<h1>Edit category</h1>
<form action="index.php?page=editcategoryconfirm" method="post">
    <input name="name" type="text" value="<?php echo $_SESSION["editcategory"]["name"]; ?>"/>
    <input name="update" type="submit" value="update" />

</form>
