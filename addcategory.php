<?php
    session_start();
    if(!isset($_SESSION['admin'])){
        header("Location:index.php?page=admin");
    }
?>

<h1>This is the add category page! </h1>
<h3>Add new category here.</h3>
<form method="post" action="index.php?page=entercategory">
    <input type="text" name="name" />
    <button type="submit" name="submit">Add</button>

</form>