<?php include_once "dbUtil.php";


    $sql = "SELECT salesPersonId, firstName, lastName
        FROM salesperson ";
    $results = select($sql);

    echo "<pre>";
    print_r($results);
    echo "</pre>";
?>
