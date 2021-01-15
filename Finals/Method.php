<?php
    include_once "Calculate.php";

    function addDivElements($scenario, $loan, $interest){

        $first = BetterHaveMy::Money($interest, $loan);
        $diff = $first + 50;
        $diff = number_format($diff);

        for ($i = 1; $i <= $scenario; $i++){ ?>
            
            <div class="divScenario">
                <b>S</b>:<?=$i?> <br/>  
                <b>L:</b><?=number_format($loan, 2)?> <br/>
                <?php $after = number_format(BetterHaveMy::Money($interest,$loan),2); ?>
                <b>M</b>:<?=($after)?> <br/>
                <?php
                    if ($after >= $diff){
                        echo '<img class="moneyimg" src="./images/money.png">';
                    } else {
                        echo '<img class="moneyimg" src="./images/placeholder.png">';
                    }

                    $loan += 500;
                ?>

            </div>

        <?php
        }
    }
?>
