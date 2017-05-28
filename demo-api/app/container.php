<?php

// Get Container
$container = $app->getContainer();

// Set Eloquent
$capsule = new \Illuminate\Database\Capsule\Manager;
$capsule->addConnection($container['settings']['db']);
$capsule->setAsGlobal();
$capsule->bootEloquent();

$container['db'] = function ($container) use ($capsule) {
    return $capsule;
};

// Register Twig View
$container['view'] = function($container) {
    $view = new \Slim\Views\Twig(__DIR__ . '/Views', [
        'cache' => false,
        'debug' => true,
    ]);

    // Add Extension
    $view->addExtension(new \Slim\Views\TwigExtension(
        $container->router,
        $container->request->getUri()
    ));

    return $view;
};

// Register Controllers
$container['ApiController'] = function($container) {
    return new \App\Controllers\ApiController($container);
};
$container['PageController'] = function($container) {
    return new \App\Controllers\PageController($container);
};
