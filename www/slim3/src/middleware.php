<?php

use Slim\App;

return function (App $app) {
    $container = $app->getContainer();

    $guard = $container->get('csrf');
    $guard->setFailureCallable(function ($request, $response, $next) {
        $request = $request->withAttribute("csrf_status", false);
        return $next($request, $response);
    });
    $app->add($guard);
};
