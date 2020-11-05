<?php

class Entity{

    private $con,$sqlData,$sqlData2;

    public function __construct($con,$input){
        $this->con = $con;
        $this->sqlData = $input;


        $query = $this->con->prepare("SELECT * FROM tbluserreg WHERE           email=:input");
        $query->bindValue(":input",$input);
        $query->execute();

        $this->sqlData = $query->fetch(PDO::FETCH_ASSOC);


        $query2 = $this->con->prepare("SELECT * FROM tbluserprofile WHERE
                                        userId=:id");

        $query2->bindValue(":id",$this->sqlData["userId"]);
        $query2->execute();

        $this->sqlData2 = $query2->fetch(PDO::FETCH_ASSOC);

    }
 
    public function getId(){
        return $this->sqlData["userId"];
    }

    public function getFirstName(){
        return $this->sqlData["firstName"];
    }

    public function getLastName(){
        return $this->sqlData["lastName"];
    }

    public function getEmail(){
        return $this->sqlData["email"];
    }

    public function getPhoneNumber(){
        return $this->sqlData["phoneNumber"];
    }

    public function getPincode(){
        return $this->sqlData2["pincode"];
    }

    public function getCity(){
        return $this->sqlData2["city"];
    }

    public function getAddress1(){
        return $this->sqlData2["address1"];
    }

    public function getAddress2(){
        return $this->sqlData2["address2"];
    }

    public function getDOB(){
        return $this->sqlData2["DOB"];
    }

    public function getOccupation(){
        return $this->sqlData2["occupation"];
    }

    public function getGender(){
        return $this->sqlData2["gender"];
    }

    public function getTiming(){
        return $this->sqlData2["timing"];
    }

    public function getPlanType(){
        return $this->sqlData2["plantype"];
    }

    public function getLevel(){
        return $this->sqlData2["level"];
    }

    public function getExpireOn(){
        return $this->sqlData2["expiredOn"];
    }

}

?>