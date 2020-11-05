<?php

    $account = new Account($con);

    if(isset($_POST["signUpButton"])){


        $firstName = FormSanitizer::sanitizeFormString($_POST["firstName"]);
        $lastName = FormSanitizer::sanitizeFormString($_POST["lastName"]);
        $email = FormSanitizer::sanitizeFormEmail($_POST["email"]);
        $email2 = FormSanitizer::sanitizeFormEmail($_POST["email2"]);
        $phoneNumber = FormSanitizer::sanitizeFormPhoneNumber($_POST["phoneNumber"]);
        $password = FormSanitizer::sanitizeFormEmail($_POST["password"]);
        $password2 = FormSanitizer::sanitizeFormEmail($_POST["password2"]);

        $success = $account->register($firstName,$lastName,$email,$email2,$phoneNumber,$password,$password2);

        if($success){
            //we can store session here so that user does not have to login again after registering
            
            header("Location: register.php");
        }
    }

    // private function getInputValue($name){
    //     if(isset($_POST[$name])){
    //         echo $_POST[$name];
    //     }jkj
    // }f

?>


<section class="signupSection">

    <div class="signUpContainer col-md-3 col-sm-6 col-xs-6">

        <h4>
            Sign Up
        </h4>

        <form action="" method="post">

            <?php echo $account->getError(Constants::$firstNameCharacters); ?>
            <input type="text" name="firstName" placeholder="first name" value="<?php getInputValue("firstName") ?>" required>

            <?php echo $account->getError(Constants::$lastNameCharacters); ?>
            <input type="text" name="lastName" placeholder="last name" value="<?php getInputValue("lastName") ?>" required>

            <?php echo $account->getError(Constants::$emailsDontMatch); ?>
            <?php echo $account->getError(Constants::$emailInvalid); ?>
            <?php echo $account->getError(Constants::$emailTaken); ?>
            <input type="email" name="email" placeholder="email" value="<?php getInputValue("email") ?>" required> 

            <input type="email" name="email2" placeholder="re-enter email" value="<?php getInputValue("email2") ?>" required>

            <?php echo $account->getError(Constants::$phoneNumberSize); ?>
            <?php echo $account->getError(Constants::$phoneNumberTaken); ?>
            <input type="number" name="phoneNumber" placeholder="phone number" value="<?php getInputValue("phoneNumber") ?>" required>

            <?php echo $account->getError(Constants::$passwordsDontMatch); ?>
            <?php echo $account->getError(Constants::$passwordLength); ?>
            <input type="password" name="password" placeholder="password" required>

            <input type="password" name="password2" placeholder="re-enter password" required>

            <input type="submit" name="signUpButton" value="Sign Up">

        </form>

        <div class="signUpFooterSection">
            <p>Already have a account?<a href="#"> Sign Ip now.</a></p>
            <!-- <a href="#">Forget Password ?</a> -->
        </div>




    </div>

</section >