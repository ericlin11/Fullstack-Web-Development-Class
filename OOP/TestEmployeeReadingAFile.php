<?php
    $myfile = fopen("Employees.txt", "r")
                or die("Unable to oepn file");

    include_once("Consultant.php");      
    include_once("Temp.php");
    

    //Output lines until EOF is reached
    while(!feof($myfile)) {
        $row = fgets($myfile);
        $columns = explode(",",$row);
        if ($columns[1] == 30 || $columns[1] == 1){
            $hoursWorked = floatval($columns[3]);
            $hourlyWage = floatval($columns[4]);
            $emp = new Consultant($hoursWorked, $hourlyWage);
            $weeklySalary = $emp->getWeeklySalary();
            print_r($columns);
            echo $weeklySalary . "\n";
            echo("----------------------------------------------------\n");
            $temp = new Temp($hoursWorked, $hourlyWage);
            $weeklySalary = $emp->getWeeklySalary(); 
            print_r($columns);
            echo $weeklySalary . "\n";
        }

    }

    fclose($myfile);
?>