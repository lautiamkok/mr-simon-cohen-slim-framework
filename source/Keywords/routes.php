<?php
// PSR 7 standard.
use Slim\Http\Request;
use Slim\Http\Response;
$app->group('/keywords', function () {
    $this->get('/leadership', function (Request $request, Response $response, array $args) {
        // Get an instance of the Twig Environment.
        $twig = $this->view;

        // From that get the Twig Loader instance (file loader in this case).
        $loader = $twig->getLoader();

        // Add the module template and additional paths to the existing.
        $loader->addPath('templates/keywords');
        $loader->addPath('templates/keywords/leadership');

        // Render.
        $response->getBody()->write(
            $twig->render('index.html', ['current' => 'leadership'])
        );

        return $response;
    });

    $this->get('/videos', function (Request $request, Response $response, array $args) {
        // Get an instance of the Twig Environment.
        $twig = $this->view;

        // From that get the Twig Loader instance (file loader in this case).
        $loader = $twig->getLoader();

        // Add the module template and additional paths to the existing.
        $loader->addPath('templates/keywords');
        $loader->addPath('templates/keywords/videos');

        // Render.
        $response->getBody()->write(
            $twig->render('index.html', ['current' => 'videos'])
        );

        return $response;
    });

    $this->get('/quotes', function (Request $request, Response $response, array $args) {
        // Get an instance of the Twig Environment.
        $twig = $this->view;

        // From that get the Twig Loader instance (file loader in this case).
        $loader = $twig->getLoader();

        // Add the module template and additional paths to the existing.
        $loader->addPath('templates/keywords');
        $loader->addPath('templates/keywords/quotes');

        // Render.
        $response->getBody()->write(
            $twig->render('index.html', ['current' => 'quotes'])
        );

        return $response;
    });
});

// quotes
$app->group('/keywords/quotes', function () {
    $this->get('/malala-yousafzai', function (Request $request, Response $response, array $args) {
        // Get an instance of the Twig Environment.
        $twig = $this->view;

        // From that get the Twig Loader instance (file loader in this case).
        $loader = $twig->getLoader();

        // Add the module template and additional paths to the existing.
        $loader->addPath('templates/keywords');
        $loader->addPath('templates/keywords/quotes');

        // Render.
        $response->getBody()->write(
            $twig->render('malala-yousafzai.html', ['current' => 'quotes'])
        );

        return $response;
    });

    $this->get('/robbie-williams', function (Request $request, Response $response, array $args) {
        // Get an instance of the Twig Environment.
        $twig = $this->view;

        // From that get the Twig Loader instance (file loader in this case).
        $loader = $twig->getLoader();

        // Add the module template and additional paths to the existing.
        $loader->addPath('templates/keywords');
        $loader->addPath('templates/keywords/quotes');

        // Render.
        $response->getBody()->write(
            $twig->render('robbie-williams.html', ['current' => 'quotes'])
        );

        return $response;
    });

    $this->get('/mattie-stepanek', function (Request $request, Response $response, array $args) {
        // Get an instance of the Twig Environment.
        $twig = $this->view;

        // From that get the Twig Loader instance (file loader in this case).
        $loader = $twig->getLoader();

        // Add the module template and additional paths to the existing.
        $loader->addPath('templates/keywords');
        $loader->addPath('templates/keywords/quotes');

        // Render.
        $response->getBody()->write(
            $twig->render('mattie-stepanek.html', ['current' => 'quotes'])
        );

        return $response;
    });

    $this->get('/simon-cohen', function (Request $request, Response $response, array $args) {
        // Get an instance of the Twig Environment.
        $twig = $this->view;

        // From that get the Twig Loader instance (file loader in this case).
        $loader = $twig->getLoader();

        // Add the module template and additional paths to the existing.
        $loader->addPath('templates/keywords');
        $loader->addPath('templates/keywords/quotes');

        // Render.
        $response->getBody()->write(
            $twig->render('simon-cohen.html', ['current' => 'quotes'])
        );

        return $response;
    });

});

// videos
$app->group('/keywords/videos', function () {
    $this->get('/just-peace', function (Request $request, Response $response, array $args) {
        // Get an instance of the Twig Environment.
        $twig = $this->view;

        // From that get the Twig Loader instance (file loader in this case).
        $loader = $twig->getLoader();

        // Add the module template and additional paths to the existing.
        $loader->addPath('templates/keywords');
        $loader->addPath('templates/keywords/videos');

        // Render.
        $response->getBody()->write(
            $twig->render('just-peace.html', ['current' => 'videos'])
        );

        return $response;
    });

    $this->get('/jane-goodall', function (Request $request, Response $response, array $args) {
        // Get an instance of the Twig Environment.
        $twig = $this->view;

        // From that get the Twig Loader instance (file loader in this case).
        $loader = $twig->getLoader();

        // Add the module template and additional paths to the existing.
        $loader->addPath('templates/keywords');
        $loader->addPath('templates/keywords/videos');

        // Render.
        $response->getBody()->write(
            $twig->render('jane-goodall.html', ['current' => 'videos'])
        );

        return $response;
    });

    $this->get('/good-day-at-work', function (Request $request, Response $response, array $args) {
        // Get an instance of the Twig Environment.
        $twig = $this->view;

        // From that get the Twig Loader instance (file loader in this case).
        $loader = $twig->getLoader();

        // Add the module template and additional paths to the existing.
        $loader->addPath('templates/keywords');
        $loader->addPath('templates/keywords/videos');

        // Render.
        $response->getBody()->write(
            $twig->render('good-day-at-work.html', ['current' => 'videos'])
        );

        return $response;
    });

    $this->get('/embrace-life', function (Request $request, Response $response, array $args) {
        // Get an instance of the Twig Environment.
        $twig = $this->view;

        // From that get the Twig Loader instance (file loader in this case).
        $loader = $twig->getLoader();

        // Add the module template and additional paths to the existing.
        $loader->addPath('templates/keywords');
        $loader->addPath('templates/keywords/videos');

        // Render.
        $response->getBody()->write(
            $twig->render('embrace-life.html', ['current' => 'videos'])
        );

        return $response;
    });

});

// leadership
$app->group('/keywords/leadership', function () {
    $this->get('/desmondtutedalailama', function (Request $request, Response $response, array $args) {
        // Get an instance of the Twig Environment.
        $twig = $this->view;

        // From that get the Twig Loader instance (file loader in this case).
        $loader = $twig->getLoader();

        // Add the module template and additional paths to the existing.
        $loader->addPath('templates/keywords');
        $loader->addPath('templates/keywords/leadership');

        // Render.
        $response->getBody()->write(
            $twig->render('desmondtutedalailama.html', ['current' => 'leadership'])
        );

        return $response;
    });

    $this->get('/jenistepanek', function (Request $request, Response $response, array $args) {
        // Get an instance of the Twig Environment.
        $twig = $this->view;

        // From that get the Twig Loader instance (file loader in this case).
        $loader = $twig->getLoader();

        // Add the module template and additional paths to the existing.
        $loader->addPath('templates/keywords');
        $loader->addPath('templates/keywords/leadership');

        // Render.
        $response->getBody()->write(
            $twig->render('jenistepanek.html', ['current' => 'leadership'])
        );

        return $response;
    });

    $this->get('/blacklivesmatter', function (Request $request, Response $response, array $args) {
        // Get an instance of the Twig Environment.
        $twig = $this->view;

        // From that get the Twig Loader instance (file loader in this case).
        $loader = $twig->getLoader();

        // Add the module template and additional paths to the existing.
        $loader->addPath('templates/keywords');
        $loader->addPath('templates/keywords/leadership');

        // Render.
        $response->getBody()->write(
            $twig->render('blacklivesmatter.html', ['current' => 'leadership'])
        );

        return $response;
    });

    $this->get('/raya', function (Request $request, Response $response, array $args) {
        // Get an instance of the Twig Environment.
        $twig = $this->view;

        // From that get the Twig Loader instance (file loader in this case).
        $loader = $twig->getLoader();

        // Add the module template and additional paths to the existing.
        $loader->addPath('templates/keywords');
        $loader->addPath('templates/keywords/leadership');

        // Render.
        $response->getBody()->write(
            $twig->render('raya.html', ['current' => 'leadership'])
        );

        return $response;
    });

});
