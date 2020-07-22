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

require __DIR__ . '/../slim3/vendor/autoload.php';

session_start();

// Instantiate the app
$settings = require __DIR__ . '/../slim3/src/settings.php';
$app = new \Slim\App($settings);

// Set up dependencies
$dependencies = require __DIR__ . '/../slim3/src/dependencies.php';
$dependencies($app);

// Register middleware
$middleware = require __DIR__ . '/../slim3/src/middleware.php';
$middleware($app);

// Register routes
$routes = require __DIR__ . '/../slim3/src/routes.php';
$routes($app);

// Controllers
require __DIR__ . '/../slim3/Controllers/SampleController.php';

// form関連
require __DIR__ . '/../slim3/Controllers/FormController.php';
$form = require __DIR__ . '/../slim3/config/form.php';

// Run app
$app->run();
