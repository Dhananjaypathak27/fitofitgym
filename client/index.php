<?php
    include_once("includes/header.php");

    $userProvider = new UserProvider($con,$_SESSION["userLoggedIn"]);
    echo $userProvider->getHomeSection();

?>