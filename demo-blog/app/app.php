<?php

session_start();

require __DIR__ . '/../app-config.php';
require __DIR__ . '/../vendor/autoload.php';

// Start Set Configuration
$config = array (
        'displayErrorDetails' => true,
        'addContentLengthHeader' => false,
    );
// End Set Configuration

$app = new \Slim\App(['settings' => $config]);

// Load Our Container
require __DIR__ . '/container.php';
// Load Our Routes
require __DIR__ . '/routes.php';