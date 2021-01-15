<?php
class BetterHaveMy{
    protected $interest = 0;
    protected $loan = 0;

    public static function Money($interest,$loan){
        $interest = $interest / 100;
        $fv = $loan * pow((1 + $interest/12), 60);
        $monthlyPayment = ($fv * $interest/12) / (pow((1 + $interest/12), 60) - 1);

        return $monthlyPayment;
    }
}


?>