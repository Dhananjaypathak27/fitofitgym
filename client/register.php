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
<title>welcome to FitoFit</title>
</head>
<body>


<?php require_once("includes/classes/FormSanitizer.php"); ?>
<?php require_once("includes/classes/Account.php"); ?>
<?php require_once("includes/classes/Constants.php"); ?>

<!-- section -->
<?php  require_once("includes/config.php") ?>
<?php  require_once("section/hero.php") ?>
<?php  require_once("section/SigninSection.php") ?>
<?php  require_once("section/SignupSection.php") ?>
<?php  require_once("section/aboutUs.php") ?>
<?php  require_once("section/contactUs.php") ?>



<!-- footer -->
<?php require_once("section/footer.php") ?>