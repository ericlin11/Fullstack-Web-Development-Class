<?php include_once "dbUtil.php";


    $sql = "SELECT * FROM cars";
    
    $results = select($sql);

    echo "<pre>";
    print_r($results);
    echo "</pre>";
?>
