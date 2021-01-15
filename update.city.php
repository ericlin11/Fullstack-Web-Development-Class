<?php
    /*update.city.php */

    include_once "dbUtil.php";

    $regionName = isset($_POST["regionName"]) ? $_POST["regionName"] : "n/a";
    $cityId = isset($_POST["cityId"]) ? $_POST["cityId"] : "n/a";



    /*
    $regionName = post("regionName", "none");
    $cityId = post("cityId", "n/a");
    $x = post("booboo", "n/a");*/

    $sql = "
        UPDATE carsdb.city
        SET regionName='$regionName'
        WHERE cityId='$cityId'
    ";

    //echo $sql;

    $status = update($sql);
    $results = (object) array('status' => $status);
    $jsonResult = json_encode($results);
    echo $jsonResult;
?>
