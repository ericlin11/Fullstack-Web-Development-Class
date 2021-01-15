<?php
    include_once "Management.php";
    include_once "Temp.php";


    $m = new Management(40,100);
    $x = new Management(12,100);
    $f = new Management(13,100);
    $z = new Management(14,100);
    $a = new Management(15,100);

    $employees = array($m,$x,$f,$z,$a);

    $len = count($employees);

    for ($i = 0; $i < $len; $i++){
        print_r($employees[$i]);
        $count = $employees[$i]->getCount();
        echo "The count is $count";
    }

    /*$weeklySalary = $m->getWeeklySalary();
    print_r($m);
    echo "Weekly salary is $$weeklySalary.";*

    $t = new Temp(50,10);
    $weeklySalary = $t->getWeeklySalary();
    print_r($t);
    echo "Weekly salary is $$weeklySalary.";
    */

?>