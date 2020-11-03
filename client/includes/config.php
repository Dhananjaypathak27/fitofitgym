<?php

    ob_start();
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

    date_default_timezone_set("Asia/Kolkata");

    try{
        $con = new PDO("mysql:dbname=fitofitgym;host=localhost","root",""); //connect to
        //connect ot fitofitgym database on local host , using username root and password "" .. root and "" password are defalut
        $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    }
    catch(PDOException $e){
        exit("Connection failed". $e->getMessage());
    }

?>