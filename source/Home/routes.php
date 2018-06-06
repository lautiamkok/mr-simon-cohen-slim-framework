<?php
// PSR 7 standard.
use Slim\Http\Request;
use Slim\Http\Response;
$app->get('/', function (Request $request, Response $response, array $args) {
    // For testing:
    // $response->getBody()->write("Hello Home!");

    // Get an instance of the Twig Environment.
    $twig = $this->view;

    // From that get the Twig Loader instance (file loader in this case).
    $loader = $twig->getLoader();

    // Add the module template and additional paths to the existing.
    $loader->addPath('templates/home/');
    $loader->addPath('templates/keywords/');

    // Render.
    $response->getBody()->write(
        $twig->render('index.html', ['current' => ''])
    );

    return $response;
});
