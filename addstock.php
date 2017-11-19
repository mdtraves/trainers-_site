<?php
    session_start();
    if(!isset($_SESSION["admin"])){
        header("Location:index.php");
    }

?>

<div class="maincontent">
        <p><a href="index.php?page=cpanel">Back to admin</a></p>
        <h1>Enter details for new stock item</h1>
        <form method="post" action="index.php?page=confirmaddstock" enctype="multipart/form-data">
        <p><input type="text" name="name" placeholder="Stock item name"/> </p>
        <p><input type="file" name="fileToUpload" id="fileToUpload" placeholder="thumbnail image" /></p>
        <p><input type="text" name="price" placeholder="price" /></p>
        <p><select name="brandID">

        <?php
        $bralist_sql="SELECT * FROM brand";
        $bralist_qry=mysqli_query($dbconnect, $bralist_sql);
        $bralist_rs=mysqli_fetch_assoc($bralist_qry);
        do { ?>
            <option value="<?php echo $bralist_rs["brandID"]; ?>"><?php echo $bralist_rs["name"]; ?></option>
        <?php }   while($bralist_rs=mysqli_fetch_assoc($bralist_qry));

        ?>

            </select></p>
        <p><input type="text" name="topline" placeholder="topline" /></p>
    <p><textarea name="description" placeholder="description" cols=30 rows=5></textarea></p>


</div>
