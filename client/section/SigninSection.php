<?php

    $account = new Account($con);

    if(isset($_POST["signInButton"])){

        $email = FormSanitizer::sanitizeFormEmail($_POST["email"]);
        $password = FormSanitizer::sanitizeFormEmail($_POST["password"]);
        

        $success = $account->login($email,$password);
        $success = $account->login($email,$password);

        if($success){
            //email is set as session variable
            $_SESSION["userLoggedIn"] = $email;
            header("Location: index.php");
        }
    }

    function getInputValue($name){
        if(isset($_POST[$name])){
            echo $_POST[$name];
        }
    }

?>

<section class="loginSection">

    <div class="signInContainer col-md-3 col-sm-6 col-xs-6">

        <h4>
            Sign In 
        </h4>

        <form action="" method="post">


            <?php echo $account->getError(Constants::$loginFailed); ?>
            <input type="email" name="email" placeholder="email" value="<?php getInputValue("email") ?>" required>

            <input type="password" name="password" placeholder="password" required>

            <input type="submit" name="signInButton" value="Sign In">

        </form>

        <div class="signInFooterSection">
            <p>New to FitoFit ? <a href="#">Sign Up now.</a></p>
            <a href="#">Forget Password ?</a>
        </div>
        

    </div>    
    

</section>