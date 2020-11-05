<?php

    include_once("includes/config.php");
    include_once("includes/classes/AboutPlan.php");
    // $aboutPlan = new AboutPlan($con);
    // $planName = $aboutPlan->getPlanNames();
    
    $array = array();
    
    while($row = $planName->fetch_assoc()){
        echo row["name"];
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
<title>Plan - Choose your plan</title>
</head>
<body>

    <div class="plan">
    <div class="row">

            <div class="col-md-12">
                <h2>Our Exciting Plan</h2>
            </div>
            <div class="col-md-4">
                <div class="smallBox">
                    <h4>Bronze Plan</h4>
                    <ul>
                        <li>1 hour tranning</li>
                        <li>All machine avilable</li>
                        <li>Locker Available</li>
                    </ul>
                    
                </div>
            </div>

            <div class="col-md-4">
                <div class="smallBox">
                    <h4>Silver Plan</h4>
                    <ul>
                        <li>1 hour tranning</li>
                        <li>All machine avilable</li>
                        <li>Locker Available</li>
                        <li>20 min treadmill</li>

                    </ul>
                    
                </div>
            </div>

            <div class="col-md-4">
                <div class="smallBox">
                    <h4>Gold Plan</h4>
                    <ul>
                        <li>1 hour tranning</li>
                        <li>All machine avilable</li>
                        <li>Locker Available</li>
                        <li>20 min treadmill</li>
                        <li>Personal Trainner Available</li>
                    </ul>
                    
                </div>
            </div>
        </div>
        <div class="col-md-12">
                <h2>Our Exciting Plan</h2>
        </div>

        <div class="bigBox">
            <div class="innerBigBox">
                <form action="">
                <select class="selectPlan" id="plan" name="plan">
                                <option value="" id="0" disabled selected hidden>Select Plan</option>
                                <?php
                                    if($areaResult->num_rows >0){
                                        while($row = $areaResult->fetch_assoc()){
                                            echo '<option id="'.$row["area_id"].'">'.$row["area"].'</option>';
                                        }
                                    }
                                ?>
                            </select>
                
                </form>
            </div>
        </div>
    </div>



<?php include_once("section/footer.php") ?>