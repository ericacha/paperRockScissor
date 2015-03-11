<?php
    require_once "src/RockPaperScissorGame.php";

    class RockPaperScissorTest extends PHPUnit_Framework_TestCase
    {
        function test_playRPS_draw()
        {
            //Arrange
            $test_playRPS = new RockPaperScissorGame;
            $input1 = "Rock";
            $input2 = "Rock";

            //Act
            $result = $test_playRPS->playRPS($input1, $input2);

            //Assert
            $this->assertEquals("Draw", $result);
        }

        // function test_playRPS_RS()
        // {
        //     //Arrange
        //     $test_playRPS = new playRPS;
        //     $input1 = "Rock";
        //     $input2 = "Scissors";
        //
        //     //Act
        //     $result = $test_playRPS->playRPS($input1, $input2);
        //
        //     //Assert
        //     $this->assertEquals("Player 1", $result);
        // }
        //
        // function test_playRPS_RP()
        // {
        //     //Arrange
        //     $test_playRPS = new playRPS;
        //     $input1 = "Rock";
        //     $input2 = "Paper";
        //
        //     //Act
        //     $result = $test_playRPS->playRPS($input1, $input2);
        //
        //     //Assert
        //     $this->assertEquals("Player 2", $result);
        // }
        //
        //
    }
?>
