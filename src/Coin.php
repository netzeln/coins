<?php
class Coin {



    function makeChange($number) {
        $wallet = array("Quarter" => 0, "Dime"=> 0, "Nickel"=>0, "Penny"=> 0);
        $Q =(int)($number / 25);
        $number = ($number - ($Q * 25));
        $D = (int)($number / 10);
        $number = ($number - ($D * 10));
        $N = (int)($number / 5);
        $number = ($number - ($N * 5));


        $wallet["Quarter"]=  $Q;
        $wallet["Dime"]=  $D;
        $wallet["Nickel"]=  $N;
        $wallet["Penny"]= $number;

        return $wallet;
    }

} ?>
