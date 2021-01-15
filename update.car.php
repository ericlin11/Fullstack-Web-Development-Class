<?php
    /*update.car.php */

    include_once "dbUtil.php";

    $price = isset($_POST["price"]) ? $_POST["price"] : "n/a";
    $id = isset($_POST["id"]) ? $_POST["id"] : "n/a";

    $sql = "
        UPDATE carsdb.cars
        SET price='$price'
        WHERE id='$id'
    ";

    //echo $sql;

    $status = update($sql);
    $results = (object) array('status' => $status);
    $jsonResult = json_encode($results);
    echo $jsonResult;
?>
