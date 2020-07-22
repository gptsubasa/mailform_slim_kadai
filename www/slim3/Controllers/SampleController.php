<?php
use Slim\Container;
use Slim\Http\Request;
use Slim\Http\Response;

class SampleController
{
    private $app;

    public function __construct(Container $app)
    {
        $this->app = $app;
    }

    public function index(Request $request, Response $response)
    {
        $name = $request->getAttribute('name');
        $array = ['test' => "Hello, $name"];
        return $this->app->view->render($response, 'sample', $array);
    }
}