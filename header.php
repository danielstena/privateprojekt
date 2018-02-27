<?php 
session_start();
if(!isset($functions)){
    require "functions.php";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shoe lazes for smarties!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <link href="https://fonts.googleapis.com/css?family=Krona+One" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script src="script.js"></script>
</head>
<header>
    <div>
        <div id="logo">
            SHOELACES FOR SMART PEOPLE
        </div>
        <div id="linksdiv">
            <div>
                <a href="index.php">HOME</a>
            </div>
            <div>
                <a href="aboutus.php">ABOUT US</a>
            </div>
            <div>
                <a href="products.php">PRODUCTS</a>
            </div>
            <div>
                <a href="cart.php">CART</a>
            </div>
            <?php 
                if(!isset($_SESSION["logged_in"])){
                    echo "<div>
                        <a href='login.php'>LOGIN</a>
                    </div>";
                }
                if(isset($_SESSION["admin_logged_in"])){
                    echo    "<div>
                        <a href='admin.php'>ADMIN</a>
                        </div>";
                }
                if(isset($_SESSION["logged_in"])){
                    echo "<div>
                            <a href='logout.php'>LOG OUT</a>
                        </div>";
                }   
            ?>
            
        </div>
        <hr style="border-color:red;">
    </div>
</header>
<body>
        
        