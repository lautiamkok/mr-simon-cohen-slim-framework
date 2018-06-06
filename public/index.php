<?php
if (PHP_SAPI == 'cli-server') {
    // To help the built-in PHP dev server, check if the request was actually for
    // something which should probably be served as a static file
    $url  = parse_url($_SERVER['REQUEST_URI']);
    $file = __DIR__ . $url['path'];
    if (is_file($file)) {
        return false;
    }
}

// Import classes.
use Slim\App as Slim;

// Include application bootstrap.
chdir(dirname(__DIR__));
require 'bootstrap.php';

// Get the application settings file.
$settings = require 'config/application.php';

// Get an instance of Slim.
$app = new Slim(["settings" => $settings]);

// Set up dependencies.
require 'config/dependencies.php';

// Register routes.
require 'config/routes.php';

// // Basic.
// $app->get('/hello/{name}', function (Request $request, Response $response) {
//     $name = $request->getAttribute('name');
//     $response->getBody()->write("Hello, $name");

//     return $response;
// });

// // Advance.
// $app->get('/tickets', function (Request $request, Response $response) {
//     $this->logger->addInfo("Something interesting happened");

//     $mapper = new Simon\TicketMapper($this->db);
//     $tickets = $mapper->getTickets();

//     $response->getBody()->write(var_export($tickets, true));
//     return $response;
// });

// Run the application!
$app->run();
