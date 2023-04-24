<?php

require_once __DIR__.'/../vendor/autoload.php'; // Load the Composer autoloader

use app\controllers\SiteController;
use app\core\Application;

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();
$config = [
    'dsn' => $_ENV['dsn'],
    'dbuser' => $_ENV['dbuser'],
    'dbpass' => $_ENV['dbpass']
];

$app = new Application(dirname(__DIR__), $config);

$app->router->get('/number', function(){
    return 'hello world';
});

$app->router->get('/contact', 'contact');

$app->router->post('/contact', [SiteController::class, 'create']);

$app->run();