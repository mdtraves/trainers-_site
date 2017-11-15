<?php
    session_start();
    if(!isset($_SESSION['admin'])){
        header("Location:index.php?page=admin");
    }
    if(!isset($_SESSION["addcategory"]["name"])){
        $_SESSION["addcategory"]["name"] = "";
    }
?>

<h1>This is the add category page! </h1>
<h3>Add new category here.</h3>
<form method="post" action="index.php?page=confirmcategory" />
    <input type="text" name="name" value="<?php echo $_SESSION["addcategory"]["name"]; ?>" />
    <button type="submit" name="submit">Add</button>

</form>