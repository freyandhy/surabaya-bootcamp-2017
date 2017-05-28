<?php

session_start();

// Load autoload.php
require __DIR__ . '/../vendor/autoload.php';

// Set DB Config
$dbConfig = array(
    'driver' => 'mysql',
    'host' => 'localhost',
    'database' => 'sby-bootcamp',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
);

// Set Configuration
$config = array(
    'displayErrorDetails' => true,
    'db' => $dbConfig,
);

// Create Object From Slim
$app = new \Slim\App(['settings' => $config]);

// Load Our Container
require __DIR__ . '/container.php';

// Load Our Routes
require __DIR__ . '/routes.php';