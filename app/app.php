<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Coin.php";



    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path'=>__DIR__."/../views"
    ));

    $app->get("/", function() use ($app){

      return $app['twig']->render("index.html.twig");
    });
    $app->get("/getcoins", function() use ($app){
        $testNumber = $_GET['money'];
        $coins = new Coin;
        $results = $coins->makeChange($testNumber);
      return $app['twig']->render("index.html.twig", array("coins"=>$results));
    });

    return $app;
 ?>
