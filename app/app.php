<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RockPaperScissorsGame.php";

    session_start(); //starts session to store form data for player 1

    $app = new Silex\Application();

    $app['debug']=TRUE;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render("player1.twig");
    });

    $app->get("/player2", function() use ($app) {
        $player1choice = $_GET['input1']; //grabs the dropdown selection from player1
        $_SESSION['player1choice'] = $player1choice; //stores player1 in SESSION
        return $app['twig']->render("player2.twig"); //
    });
    $app->get("/gameresult", function() use ($app) {
        $game = new RockPaperScissorsGame; //starts a new game and uses the methods we created
        $player2choice = $_GET['input2']; //grabs the dropdown selection from player2
        $result = $game->playRPS($_SESSION['player1choice'],$player2choice);//goes in SESSION to get player1  and takes player2 , runs our methods
        return $app['twig']->render("gameresult.twig", array('winner' => $result)); //calls methods and displays winner
    });




    return $app;


?>
<!-- , array('selection' => $player1choice) -->
