<!doctype html>
<?php
include ("dbconnect.php");
?>
<html>
<head>
    <title>Trainers</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="styles.css" rel=stylesheet type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Sniglet" rel="stylesheet">
</head>
<body>
    <div class="container">

        <?php
        include("header.php");
            if(!isset($_GET["page"])){
            ?>
                <div class="banner"><img src="images/banner.jpg" alt="herp image"/></div>
        <?php
        }
        ?>

        <div class="mainContent">
            <?php
            if (!isset($_GET["page"])) {
                include ("home.php");
            }else {
                $page=$_GET["page"];
                include ("$page.php");
            }
            ?>

        </div>

        <?php
        include("seccontent.php");
        ?>

        <?php
        include("footer.php")
        ?>
    </div>
</body>

</html>