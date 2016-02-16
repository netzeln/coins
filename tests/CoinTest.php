<?php
    require_once "src/Coin.php";

    Class CoinTest extends PHPUnit_Framework_TestCase
    {



        function test_makeChange_quarter()
        {
            //Arrange
            $test_MakeChange = new Coin;
            $input = 50;

            //Act
            $result = $test_MakeChange->makeChange($input);

            //Assert
            $this->assertEquals(array("Quarter" => 2, "Dime"=> 0, "Nickel"=>0, "Penny"=> 0), $result);
        }

        function test_makeChange_dime()
        {
            //Arrange
            $test_MakeChange = new Coin;
            $input = 20;

            //Act
            $result = $test_MakeChange->makeChange($input);

            //Assert
            $this->assertEquals(array("Quarter" => 0, "Dime"=> 2, "Nickel"=>0, "Penny"=> 0), $result);
        }

        function test_makeChange_nickel()
        {
            //Arrange
            $test_MakeChange = new Coin;
            $input = 5;

            //Act
            $result = $test_MakeChange->makeChange($input);

            //Assert
            $this->assertEquals(array("Quarter" => 0, "Dime"=> 0, "Nickel"=>1, "Penny"=> 0), $result);
        }
        function test_makeChange_penny()
        {
            //Arrange
            $test_MakeChange = new Coin;
            $input = 4;

            //Act
            $result = $test_MakeChange->makeChange($input);

            //Assert
            $this->assertEquals(array("Quarter" => 0, "Dime"=> 0, "Nickel"=>0, "Penny"=> 4), $result);
        }

        function test_makeChange_mixedA()
        {
            //Arrange
            $test_MakeChange = new Coin;
            $input = 86;

            //Act
            $result = $test_MakeChange->makeChange($input);

            //Assert
            $this->assertEquals(array("Quarter" => 3, "Dime"=> 1, "Nickel"=>0, "Penny"=> 1), $result);
        }

        function test_makeChange_mixedB()
        {
            //Arrange
            $test_MakeChange = new Coin;
            $input = 69;

            //Act
            $result = $test_MakeChange->makeChange($input);

            //Assert
            $this->assertEquals(array("Quarter" => 2, "Dime"=> 1, "Nickel"=>1, "Penny"=> 4), $result);
        }
        function test_makeChange_mixed7()
        {
            //Arrange
            $test_MakeChange = new Coin;
            $input = 7;

            //Act
            $result = $test_MakeChange->makeChange($input);

            //Assert
            $this->assertEquals(array("Quarter" => 0, "Dime"=> 0, "Nickel"=>1, "Penny"=> 2), $result);
        }
    }


 ?>
