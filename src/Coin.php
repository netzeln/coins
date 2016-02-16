<?php
class Coin {



    function makeChange($number) {
        $wallet = array("Quarter" => 0, "Dime"=> 0, "Nickel"=>0, "Penny"=> 0);
        $Q =(int)($number / 25); echo ($Q);
        
        $newNumber = ($number - ($Q * 25)); echo ($newNumber);
        $D = (int)($newNumber / 10); echo($D);

        $wallet["Quarter"]=  $Q;
        $wallet["Dime"]=  $D;
var_dump($wallet);
        return $wallet;
    }

} ?>
