<?php

// Get Container
$container = $app->getContainer();

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

    // Add App Extension
    $view->addExtension(new Twig_Extensions_App());

    return $view;
};

// Register 404 Page

// Register PageController
$container['HomeController'] = function($container) {
    return new \App\Controllers\HomeController($container);
};
$container['ConvertController'] = function($container) {
    return new \App\Controllers\ConvertController($container);
};