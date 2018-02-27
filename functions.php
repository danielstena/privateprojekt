<?php
  $functions = true;

    if(isset($_SESSION["welcome"])){
        echo "<script>alert('Welcome ". $_SESSION["fullname"] ."! 😃');</script>";
        unset($_SESSION["welcome"]);
    }


    function login($users, $username, $password){
        
        #For loop som sedan kollar informationen användaren skrivit in mot informationen i $users arrayen
        if(isset($username)){
            for ($i = 0; $i < count($users); $i++){
                if($username == $users[$i]["username"] and $password == $users[$i]["password"]){
                    $_SESSION["fullname"] = $users[$i]["fullname"];
                    $_SESSION["logged_in"] = true;
                    if($users[$i]["Admin"] == "YES"){
                        $_SESSION["admin_logged_in"] = true;
                    } 
                    $_SESSION["welcome"] = true;
                    header("location:index.php");
                
                }
            }
        }
    }
?>
