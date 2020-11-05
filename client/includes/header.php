<?php
    include_once("includes/config.php");
    include_once("includes/classes/Entity.php");
    include_once("includes/classes/UserProvider.php");

    // session_start();
    if(!isset($_SESSION["userLoggedIn"])){
        header("location:register.php");
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
<link rel="stylesheet" href="assets/style/style.css">
<title>Welcome to fitofitgym</title>
</head>
<body>