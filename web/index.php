<?php

require_once __DIR__.'/../vendor/autoload.php'; // Load the Composer autoloader

use app\controllers\SiteController;
use app\core\Application;

$app = new Application(dirname(__DIR__));



echo '<pre>';
var_dump($_REQUEST);

echo '<pre>';
$app->router->get('/number', function(){
    return 'hello world';
});

$app->router->get('/contact', 'contact');

$app->router->post('/contact', [SiteController::class, 'create']);

$app->run();