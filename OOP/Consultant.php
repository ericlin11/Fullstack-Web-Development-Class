<?php
    include_once "Employee.php";

    /*
    Consultant is paid by the hour.
    They can work over 40 hours, but are not entitled to OT
    */

    class Consultant extends Employee {

        public function getWeeklySalary(){
            return ($this->hoursWorked * $this->hourlyWage);
        }
    }

?>