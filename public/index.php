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
$app->get('/home', function ($request, $response, $args) use ($twig) {
    return $twig->render($response, 'home.twig');
});

$app->get('/sobre', function ($request, $response, $args) use ($twig) {
    return $twig->render($response, 'sobre.twig');
});

$app->get('/servicos', function ($request, $response, $args) use ($twig) {
    return $twig->render($response, 'servicos.twig');
});

$app->get('/produtos', function ($request, $response, $args) use ($twig) {
    return $twig->render($response, 'produtos.twig');
});

$app->get('/blog', function ($request, $response, $args) use ($twig) {
    return $twig->render($response, 'blog.twig');
});

$app->get('/post', function ($request, $response, $args) use ($twig) {
    return $twig->render($response, 'post.twig');
});

$app->run();
