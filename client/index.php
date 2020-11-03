<?php
    include_once("includes/config.php");
    // session_start();
    if(isset($_SESSION["userLoggedIn"])){
        header("location:home.php");
    }
    else{
        header("location:register.php"); 
    }
?>