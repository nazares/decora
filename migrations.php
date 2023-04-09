<?php

require_once __DIR__ . '/vendor/autoload.php';
(new \nazares\phpdotenv\Dotenv(__DIR__))->load();

use nazares\decoracore\Application;

$config = [
    'userClass' => \app\models\User::class,
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD']
    ]
];

$app = new Application(__DIR__, $config);

$app->db->applyMigrations();
