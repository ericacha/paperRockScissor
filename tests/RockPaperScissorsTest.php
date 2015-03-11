<?php
    require_once "src/RockPaperScissorsGame.php";

    class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
    {
        function test_playRPS_drawRock()
        {
            //Arrange
            $test_playRPS = new RockPaperScissorsGame;
            $input1 = "Rock";
            $input2 = "Rock";

            //Act
            $result = $test_playRPS->playRPS($input1, $input2);

            //Assert
            $this->assertEquals("Draw", $result);
        }

        function test_playRPS_drawPaper()
        {
            //Arrange
            $test_playRPS = new RockPaperScissorsGame;
            $input1 = "Paper";
            $input2 = "Paper";

            //Act
            $result = $test_playRPS->playRPS($input1, $input2);

            //Assert
            $this->assertEquals("Draw", $result);
        }

        function test_playRPS_drawScissors()
        {
            //Arrange
            $test_playRPS = new RockPaperScissorsGame;
            $input1 = "Scissors";
            $input2 = "Scissors";

            //Act
            $result = $test_playRPS->playRPS($input1, $input2);

            //Assert
            $this->assertEquals("Draw", $result);
        }

        function test_playRPS_RS()
        {
            //Arrange
            $test_playRPS = new RockPaperScissorsGame;
            $input1 = "Rock";
            $input2 = "Scissors";

            //Act
            $result = $test_playRPS->playRPS($input1, $input2);

            //Assert
            $this->assertEquals("Player 1", $result);
        }

        function test_playRPS_PR()
        {
            //Arrange
            $test_playRPS = new RockPaperScissorsGame;
            $input1 = "Paper";
            $input2 = "Rock";

            //Act
            $result = $test_playRPS->playRPS($input1, $input2);

            //Assert
            $this->assertEquals("Player 1", $result);
        }

        function test_playRPS_PS()
        {
            //Arrange
            $test_playRPS = new RockPaperScissorsGame;
            $input1 = "Paper";
            $input2 = "Scissors";

            //Act
            $result = $test_playRPS->playRPS($input1, $input2);

            //Assert
            $this->assertEquals("Player 2", $result);
        }

        function test_playRPS_SP()
        {
            //Arrange
            $test_playRPS = new RockPaperScissorsGame;
            $input1 = "Scissors";
            $input2 = "Paper";

            //Act
            $result = $test_playRPS->playRPS($input1, $input2);

            //Assert
            $this->assertEquals("Player 2", $result);
        }

        function test_playRPS_RP()
        {
            //Arrange
            $test_playRPS = new RockPaperScissorsGame;
            $input1 = "Rock";
            $input2 = "Paper";

            //Act
            $result = $test_playRPS->playRPS($input1, $input2);

            //Assert
            $this->assertEquals("Player 2", $result);
        }

        function test_playRPS_SR()
        {
            //Arrange
            $test_playRPS = new RockPaperScissorsGame;
            $input1 = "Scissors";
            $input2 = "Rock";

            //Act
            $result = $test_playRPS->playRPS($input1, $input2);

            //Assert
            $this->assertEquals("Player 2", $result);
        }
    }
?>
