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

    // フォーム
    $app->group('/form', function () {
        $this->get('', FormController::class . ':input')->setName('input');
        $this->post('/confirm', FormController::class . ':confirm')->setName('confirm');
    });
};
