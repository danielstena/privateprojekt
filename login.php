<?php 
    session_start();
    require "data.php";
    if(!isset($functions)){
        require "functions.php";
    } 
    login($users, $_POST["username"], $_POST["password"]);
    require "header.php";
?>
<div id="wrapper">
    <div class="login">
        <div>
        </div>
        <form action="login.php" method="POST">
            <input class="input" type="text" name="username" value="Username">
            <input class="input" type="password" name="password" value="Password">
            <input height="30px" type="submit" value="login">
        </form>
    </div>
</div>

<?php 
    require "footer.php" 
?>