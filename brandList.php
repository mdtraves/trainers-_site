<?php
$cat_sql = "SELECT * FROM brand";
$cat_query = mysqli_query($dbconnect, $cat_sql);
$cat_rs=mysqli_fetch_assoc($cat_query);
do {?>
    <a href="index.php?page=brand&brandID=<?php echo $cat_rs["brandID"]; ?>"><?php echo $cat_rs["name"]; ?></a>
<?php }
while ($cat_rs=mysqli_fetch_assoc($cat_query));
?>