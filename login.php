<h1>login screen</h1>


<form id="cpanel_login" name="login" method="post" action="index.php?page=admin">
    <input type="text" name="username" maxlength=30 id="username" placeholder=" username">
    <input type="password" name="password" id="password" maxlength=30 placeholder=" password">
    <button type="submit" id="submit" name="login">Sign In</button>
    <?php
    if(isset($_POST["login"]) && !isset($_SESSION["admin"])){
        ?>
        <p>Incorrect username or password</p>
    <?php
    }
    ?>


</form>