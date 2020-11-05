<?php

    class UserProvider{
        private $con,$email,$fullName,$timing,$plan,$expireDate;
        public function __construct($con,$email){
            $this->con = $con;
            $this->email = $email;

            $entity = new Entity($this->con,$this->email);

            $firstName =$entity->getFirstName();
            $lastName = $entity->getLastName();
            $this->timing = $entity->getTiming();
            $this->plan = $entity->getPlanType();
            $this->expireDate = $entity->getExpireOn();
            $this->fullName = $firstName . " " . $lastName;
            
        }  

        public function getHomeSection(){
            
            return "<div class='home'>
            <div class='center'>
                <h2>Welcome back $this->fullName !</h2>
            </div>
            
            <div class='row'>
                <div class='col-md-4'>
                    <div class='smallBox'>
                        <p>Timing - $this->timing </p>
                        <a href='#' class='red changeTiming'>Change Timing</a>
                    </div>
                </div>
    
                <div class='col-md-4'>
                    <div class='smallBox'>
                        <p>Plan Type - $this->plan</p>
                        <a href='#' class='red upgradePackage'>Upgrade Package</a>
                    </div>
                </div>
    
                <div class='col-md-4'>
                    <div class='smallBox'>
                        <p>Expire On - $this->expireDate</p>
                        <a href='#' class='red feePayment'>FeePayment</a>
                    </div>
                </div>
            </div>  
            
            <div class='bigBox'>
                <div class='row'>
                    <div class='col-md-12'>
                        <h3 class='center'>Exercise Chart</h3>
                    </div>
                </div>
                
                <div class='row'>
                    <div class='col-md-12'>
                        <p class='beginner end'>beginner</p>
                    </div>
                </div>
    
                <div class='row'>
                    <div class='col-md-12'>
                        <p class='center excersiseName'>Chest</p>
                    </div>
                </div>
    
            </div>
        </div>";
        }



    }

?>