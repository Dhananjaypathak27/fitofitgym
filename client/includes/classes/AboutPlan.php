<?php

    class AboutPlan{

        private $con,$sqlData;
        public function __construct($con){
            $this->con = $con;
        }

        public function getPlanNames(){
            $query = $this->con->prepare("SELECT * FROM tblplanname");
            return $query->execute();

            // $this->sqlData = $query->fetch(PDO::FETCH_ASSOC);
            // return $this->sqlData;
        }

        public function getPlanPrice($planName){
            $query = $this->con->prepare("SELECT id,month FROM tbluserplan WHERE planName=:planName");

            $query->bindValue(":planName",$planName);
            $query->execute();
        }

    }

    


?>