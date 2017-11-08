<?php
// if brand id is not set redirect back to index page
if(!isset($_GET["brandID"])){
    header("Location:index.php");
}

// select all stock items belonging to the selected brand

$stock_sql= "SELECT stock.name, stock.price, stock.stockID, stock.largeimg, brand.name AS brandname FROM stock JOIN brand ON stock.brandID=brand.brandID WHERE stock.brandID=".$_GET["brandID"];
if($stock_query=mysqli_query($dbconnect, $stock_sql)){
    $stock_rs = mysqli_fetch_assoc($stock_query);
}
if(mysqli_num_rows($stock_query) ==0){
    echo "Sorry none left";
}   else {
    ?>
        <h1><?php echo $stock_rs["brandname"]?></h1>
        <?php do {
            ?>
            <div class="item">
                <a href="index.php?page=item&stockID=<?php echo $stock_rs["stockID"]; ?>"><p><?php echo $stock_rs["name"]; ?></p>
                    <p>£<?php echo $stock_rs["price"]; ?></p>
                <img src="images/<?php echo $stock_rs["largeimg"]?>" /></a>
            </div>
        <?php
    } while ($stock_rs=mysqli_fetch_assoc($stock_query));
    ?>
<?php
}
?>