<?php
session_start();

function security(){
    $_SESSION["loginMessage"] = "";
    $status = isset($_SESSION["isAuthorized"])
        ?   $_SESSION["isAuthorized"] : false;

    if ($status ==false){
        $newUrl = "login.php";
        $_SESSION["loginMessage"] = "You are not authorized";
        header('Location:'. $newUrl);
    }

}

security();
?>