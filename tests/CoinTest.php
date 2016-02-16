<?php
    require_once "src/Coin.php";

    Class CoinTest extends PHPUnit_Framework_TestCase
    {

        function test_makeChange()
        {
            //Arrange
            $test_MakeChange = new Coin;
            $input = 1;

            //Act
            $result = $test_MakeChange->makeChange($input);

            //Assert
            $this->assertEquals(array("penny"=>1), $result);
        }
    }


 ?>
