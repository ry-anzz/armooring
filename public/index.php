<?php
require __DIR__ . '/../vendor/autoload.php';

use Slim\Factory\AppFactory;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;

$app = AppFactory::create();

// Twig
$twig = Twig::create(__DIR__ . '/../templates', ['cache' => false]);
$app->add(TwigMiddleware::create($app, $twig));

// Rota
$app->get('/', function ($request, $response, $args) use ($twig) {
    return $twig->render($response, 'home.twig');
});

$app->run();
