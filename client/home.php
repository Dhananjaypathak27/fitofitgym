
<?php
    include_once("includes/config.php");
    include_once("includes/classes/Entity.php");
    if(!isset($_SESSION["userLoggedIn"])){
        header("location:register.php");
    }

    $input = $_SESSION["userLoggedIn"];
    $entity = new Entity($con,$input);

    $firstName =$entity->getFirstName();
    $lastName = $entity->getLastName();
    $email = $entity->getEmail();
    $phoneNumber = $entity->getPhoneNumber();

    $fullName = $firstName . " " . $lastName;
    
?>

    <div class="home">
        <div class="center">
            <h2>Welcome back <?php echo $fullName ?> !</h2>
        </div>
        
        <div class="row">
            <div class="col-md-4">
                <div class="smallBox">
                    <p>Timing - 7:00am - 8:00am</p>
                    <a href="#" class="red changeTiming">Change Timing</a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="smallBox">
                    <p>Plan Type - Gold</p>
                    <a href="#" class="red upgradePackage">Upgrade Package</a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="smallBox">
                    <p>Expire On - 22/11/2020</p>
                    <a href="#" class="red feePayment">FeePayment</a>
                </div>
            </div>
        </div>  
        
        <div class="bigBox">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="center">Exercise Chart</h3>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <p class="beginner end">beginner</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <p class="center excersiseName">Chest</p>
                </div>
            </div>

        </div>
    </div>
    


<?php include_once("section/footer.php"); ?>