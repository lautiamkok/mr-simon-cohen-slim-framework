<?php
$container = $app->getContainer();

// Add Dependencies

// Use Monolog In Your Application
$container['logger'] = function($c) {
    $logger = new \Monolog\Logger('my_logger');
    $file_handler = new \Monolog\Handler\StreamHandler("logs/app.log");
    $logger->pushHandler($file_handler);
    return $logger;
};

// Add A Database Connection
$container['db'] = function ($c) {
    $db = $c['settings']['db'];
    $pdo = new PDO("mysql:host=" . $db['host'] . ";dbname=" . $db['dbname'],
        $db['user'], $db['pass']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
};

// Views and Templates
// https://www.slimframework.com/docs/features/templates.html
$container['view'] = function ($container) {
    // // Option 1: Using Slim's View.
    // $settings = $container->get('settings');
    // $view = new Twig($settings['view']['template_path'], $settings['view']['twig']);

    // // Add extensions
    // $view->addExtension(new Slim\Views\TwigExtension($container->get('router'), $container->get('request')->getUri()));
    // $view->addExtension(new Twig_Extension_Debug());

    // return $view;

    // Option 2: Using Twig directly.
    // $settings = $container->get('settings');

    $loader = new Twig_Loader_Filesystem('templates/');

    // Add additional paths to the existing.
    $loader->addPath('templates/layout/');

    $twig = new Twig_Environment($loader, array(
        'cache' => 'cache/',

        // Turn off cache during the dev.
        // http://stackoverflow.com/questions/42584433/slim-twig-how-to-turn-off-twig-cache-during-development
        'cache' => false,
    ));

    // Add global variables to the templates.
    // http://stackoverflow.com/questions/28958370/how-can-i-define-global-variables-inside-a-twig-template-file
    // http://stackoverflow.com/questions/25812170/how-to-define-global-variable-for-twig
    $twig->addGlobal('var1', 'hello');
    $twig->addGlobal('var2', 'world');

    // Add twig extension.
    // http://stackoverflow.com/questions/38340771/get-two-random-items-from-a-list-in-twig
    // http://twig.sensiolabs.org/doc/extensions/index.html#extensions-install
    // http://twig.sensiolabs.org/doc/extensions/array.html
    // http://stackoverflow.com/questions/40629390/twig-how-to-randomise-items-in-the-array-and-loop-them
    $twig->addExtension(new \Twig_Extensions_Extension_Array());
    return $twig;
};

