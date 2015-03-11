<?php


    class RockPaperScissorsGame
    {
        function playRPS($input1, $input2)
        {
            if (($input1 == "Rock") && ($input2 == "Scissors")) {
                return "Player 1's rock just totally crushes Player 2's scissors, devastating!";
            }

            elseif (($input1 == "Paper") && ($input2 == "Rock")) {
                return "Player 1's paper gives Player 2's rock a hug...of DEATH!";
            }

            elseif (($input1 == "Paper") && ($input2 == "Scissors")) {
                return "Player 2's scissors turns Player 1's paper into a snowflake.";
            }

            elseif (($input1 == "Scissors") && ($input2 == "Paper")) {
                return "Player 1's scissors slices Player 2's paper into ribbons.";
            }

            elseif (($input1 == "Rock") && ($input2 == "Paper")) {
                return "Player 2's paper suffocates Player 1's sad excuse for a rock, just go home.";
            }

            elseif (($input1 == "Scissors") && ($input2 == "Rock")) {
                return "Player 2's rock smashes Player 1's stupid scissors.";
            }

            else {
                return "No One Wins. Ever. Life's pointless....";
            }
        }
    }
?>
