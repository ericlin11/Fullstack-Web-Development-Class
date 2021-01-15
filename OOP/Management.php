<?php
    include_once "Employee.php";

    class Management extends Employee {

    public function getWeeklySalary(){
        return (40 * $this->hourlyWage);
    }

    }
?>