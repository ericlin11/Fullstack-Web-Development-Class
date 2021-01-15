<?php
    include_once "GradeRule.php";

    $x = 0;
    $rule = new QPARule(90);
    //$rule->setScore(100);
    $status = $rule->getStatus();
    $grade = $rule->getQPA();

    echo "status is $status, and your grade is $grade";
?>