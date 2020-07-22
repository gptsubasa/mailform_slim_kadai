<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

return function (App $app) {
    $container = $app->getContainer();

    // Register Blade View helper
    $container['view'] = function ($container) {
        return new \Slim\Views\Blade(
            $container['settings']['renderer']['blade_template_path'],
            $container['settings']['renderer']['blade_cache_path']
        );
    };

    $app->get('/hello/{name}', SampleController::class . ':index');

    // フォーム
    $app->group('/form', function () {
        $this->get('', FormController::class . ':input');
    });


    // $app->get('/[{name}]', function (Request $request, Response $response, array $args) use ($container) {
    //     // Sample log message
    //     $container->get('logger')->info("Slim-Skeleton '/' route");

    //     // Render index view
    //     return $container->get('renderer')->render($response, 'index.phtml', $args);
    // });
};
