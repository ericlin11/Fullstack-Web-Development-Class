<?php
    session_start();
    
    if (!isset($_SESSION["isAuthorized"])){
        if (isset($_POST["password"])){
            $password = $_POST["password"];

            if ($password == "password1234"){
                $_SESSION["isAuthorized"] = true;
                $newUrl = "S01.php";
                header('Location:'. $newUrl);
            }
        }
    }

    if (isset($_SESSION["loginMessage"])){
        $message = $_SESSION["loginMessage"];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Page 2</h1>

    <form method="post">
        <label>user id:</label>
        <input type="text" name="id"/><br/>
        <label>password:</label>
        <input type="text" name="password"/><br/>
        <input type="submit"/> <br/>
        <span><?= $message?></span>

    </form>

</body>
</html>

