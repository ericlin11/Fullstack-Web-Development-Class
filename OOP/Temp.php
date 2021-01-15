<?php
    include_once "Employee.php";

    /*
    Temp are entitled to overtime hours if they worked over 40 hours
    and the payrate for overtime is 1.5
    */

    class Temp extends Employee {

        public function getWeeklySalary(){
            if ($this->hoursWorked > 40){
                return((($this->hoursWorked - 40) * ($this->hourlyWage*1.5)) + (40 * $this->hourlyWage));
            } else {
                return ($this->hoursWorked * $this->hourlyWage);
            }
        }
    }
?>