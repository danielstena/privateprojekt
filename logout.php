<?php 
session_start();

unset($_SESSION["logged_in"]);
unset($_SESSION["admin_logged_in"]);
header("location:index.php");
die(wooops);