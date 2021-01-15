<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="format.css">
</head>
<body>
    <?php include_once "Method.php";?>

    <div class="divBody">
        <h1>Loan Scenarios</h1>
        <form action="Design.php" method="post"> 
            S: Scenario <input type="text" name="scenario"/>
            L: Loan Amount <input type="text" name="loan" />
            I: Interest Rate<input class="interest" type="interest" name="interest" /> % 
            M: Monthly Payments
            <input type="submit" class="calculate" value="calculate" />
            </br>
            <img class="moneyimg" src="./images/money.png"> = $50 more than initial Monthly Payments
        </form> 
        <?php
            if(!empty($_POST['scenario']) && !empty($_POST['loan']) && !empty($_POST['interest'])) { 
                addDivElements($_POST['scenario'],$_POST['loan'], $_POST['interest'] );
            } 
        ?>
    </div>
    
</body>
</html>
