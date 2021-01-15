<?php

    class GradeRule {
        protected $score = 0; //attribute/property/instance variable

        function __construct($score){
            if($score > 100){
                echo "send email, invalid grade has been detected";
                $this->score = 100;
            }
            else{
                $this->score = $score; 
            }
        }

        public function getStatus(){
            $status = "failure";
            if ($this->score >= 65){
                $status = "passing";
            }
            return $status;
        }
        
        function __destruct(){
            echo "\nI am finished";
        }
    }


    //Inheritance
    class QPARule extends GradeRule {

        public function getQPA(){
            $qpa = 0;
            if ($this->score >= 92){
                $qpa = 4.0;
            } else if ($this->score >= 90){
                $qpa = 3.7;
            } 
            return $qpa;
        }
    }

?>