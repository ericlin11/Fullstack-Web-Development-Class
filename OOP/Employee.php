<?php 
    abstract class Employee{
        
        protected $hoursWorked;
        protected $hourlyWage;

        public function __construct($hoursWorked, $hourlyWage){
            $this->hoursWorked = $hoursWorked;
            $this->hourlyWage = $hourlyWage;
        }

        abstract public function getWeeklySalary();
    }
?>
    