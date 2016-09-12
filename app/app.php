<?php
 require_once __DIR__."/../vendor/autoload.php";
 require_once __DIR__."/../src/TitleCaseGenerator.php";

 date_default_timezone_set('America/Los_Angeles');

 $app = new Silex\Application();
 $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

   $app->get("/", function() use ($app){
   return $app['twig']->render('home.html.twig');
   });
   $app->post("/toUpper", function() use ($app){
     $title_input = $_POST['title_input'];
     $newTitle = new TitleCaseGenerator();
     $results = $newTitle->makeTitleCase($title_input);
     return $app['twig']->render('toUpper.html.twig', array("results" => $results));
  });
  return $app;
?>
