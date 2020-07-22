<?php
use Slim\Container;
use Slim\Http\Request;
use Slim\Http\Response;

class FormController
{
    private $app;

    public function __construct(Container $app)
    {
        $this->app = $app;
    }

    public function input(Request $request, Response $response)
    {
        $name = $request->getAttribute('name');
        $array = ['test' => "Hello, $name"];
        return $this->app->view->render($response, 'form.input', $array);
    }
}