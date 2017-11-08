<?php
    if(!isset($_GET["stockID"])){
    header("Location:index.php");
    }
    $item_sql="SELECT * FROM stock WHERE stockID=".$_GET["stockID"];
    if($item_query=mysqli_query($dbconnect, $item_sql)){
        $item_rs = mysqli_fetch_assoc($item_query);
        ?>
        <h1><?php echo $item_rs["name"];  ?></h1>
        <h2>£<?php echo $item_rs["price"];  ?></h2>
        <img src="images/<?php echo $item_rs["largeimg"]?>"/>
        <h3><?php echo $item_rs["description"];  ?></h3>
        <p><?php echo $item_rs["topline"] ?></p>
    <?php
    }
    ?>