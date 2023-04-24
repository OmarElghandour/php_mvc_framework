<?php

require_once __DIR__.'/vendor/autoload.php'; // Load the Composer autoloader

use app\core\Application;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$config = [
    'dsn' => $_ENV['dsn'],
    'dbuser' => $_ENV['dbuser'],
    'dbpass' => $_ENV['dbpass']
];

$app = new Application(__DIR__, $config);

$app->db->applyMigrations();