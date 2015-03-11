<?php

    class RockPaperScissorsGame
    {
        function playRPS($input1, $input2)
        {
            if (($input1 == "Rock") && ($input2 == "Scissors")) {
                return "Player 1";
            }

            elseif (($input1 == "Paper") && ($input2 == "Rock")) {
                return "Player 1";
            }

            elseif ($input1 == $input2) {
                return "Draw";
            }
        }
    }
?>
