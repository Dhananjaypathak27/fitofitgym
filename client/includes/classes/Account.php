<?php

class Account{

    private $con;
    private $errorArray = array();

    public function __construct($con){
        $this->con = $con;
    }

    public function register($fn,$ln,$em,$em2,$phno,$pw,$pw2){
        $this->validateFirstName($fn);
        $this->validateLastName($ln);
        $this->validatePhoneNumber($phno);
        $this->validateEmails($em,$em2);
        $this->validatePasswords($pw,$pw2);

        if(empty($this->errorArray)){
            return $this->insertUserDetails($fn,$ln,$em,$phno,$pw);
        }

        return false;

    }

    public function login($em,$pw){
        $pw = hash("sha512",$pw);

        $query = $this->con->prepare("SELECT * FROM tbluserreg WHERE email=:em AND password=:pw");
       
        $query->bindValue(":em",$em);
        $query->bindValue(":pw",$pw);

        $query->execute();

        if($query->rowCount() == 1){
            return true;
        }

        array_push($this->errorArray,Constants::$loginFailed);
        return false;
    }

    private function insertUserDetails($fn,$ln,$em,$phno,$pw){

        $pw = hash("sha512",$pw);

        $query = $this->con->prepare("INSERT INTO tbluserreg (firstName,lastName,email,phoneNumber,password)
                                        VALUES (:fn,:ln,:em,:phno,:pw)");

        $query->bindValue(":fn",$fn);
        $query->bindValue(":ln",$ln);
        $query->bindValue(":em",$em);
        $query->bindValue(":phno",$phno);
        $query->bindValue(":pw",$pw);

        return $query->execute();

    }

    private function validateFirstName($fn){
        if(strlen($fn)<2 || strlen($fn)>25){
            array_push($this->errorArray,Constants::$firstNameCharacters);
        }
    }

    private function validateLastName($ln){
        if(strlen($ln)<2 || strlen($ln)>25){
            array_push($this->errorArray,Constants::$lastNameCharacters);
        }
    }


    private function validateEmails($em,$em2){
        if($em != $em2){
            array_push($this->errorArray,Constants::$emailsDontMatch);
            return;
        }
        
        if(!filter_var($em, FILTER_VALIDATE_EMAIL)){
            array_push($this->errorArray,Constants::$emailInvalid);
            return;
        }

        $query = $this->con->prepare("SELECT * FROM tbluserreg WHERE email=:em");
        $query->bindValue(":em",$em);

        $query->execute();

        if($query->rowCount() !=0){
            array_push($this->errorArray,Constants::$emailTaken);
        }

    }


    private function validatePhoneNumber($phno){
        if(strlen($phno)!=10){
            array_push($this->errorArray,Constants::$phoneNumberSize);
            return;
        }

        $query = $this->con->prepare("SELECT * FROM tbluserreg WHERE phoneNumber=:phno");
        $query->bindValue(":phno",$phno);

        $query->execute();

        if($query->rowCount() !=0){
            array_push($this->errorArray,Constants::$phoneNumberTaken);
        }
    }

    private function validatePasswords($pw,$pw2){
        if($pw != $pw2){
            array_push($this->errorArray,Constants::$passwordsDontMatch);
            return;
        }

        if(strlen($pw)<5 || strlen($pw)>25){
            array_push($this->errorArray,Constants::$passwordLength);
        }
    }

    public function getError($error){
        if(in_array($error,$this->errorArray)){
            return "<span class='errorMessage'>$error</span>";
        }
    }

}


?>