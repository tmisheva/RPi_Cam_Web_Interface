<?php

require_once __DIR__.'/../vendor/autoload.php';

use Silex\Application;

$app = new Application();

// Turn on debugging to aid development
$app['debug'] = true;

// Register
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../src/RpiCam/View',
));

// Routs
$app->match('/saved', 'RpiCam\Controller\SecureController::actionListSaved')->bind('saved');
$app->match('/', 'RpiCam\Controller\SecureController::actionPreview')->bind('home');

//$app->mount('/saved', new RpiCam\Controller\SecureController());

// run
$app->run();
