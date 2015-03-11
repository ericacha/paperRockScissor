<html>
    <head>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
        <title>Rock Paper Scissors Game!!</title>
    </head>
    <body>
        <div class="container">
            <h1> Rock, Paper, Scissors Game!!</h1>
            <h3> Player 1, make your choice below. </h3>
                <form id="player 1" action="/views/player2.twig" method="post">
                        <select name="player1choice">
                        <option value="Rock">Rock</option>
                        <option value="Paper">Paper</option>
                        <option value="Scissors">Scissors</option>
                        </select>
                    <input type="submit" value="Play!">
                    <p>*hit play button then let player 2 make selection, no peeking!</p>
                </form>



        </div>
    </body>
</html>
