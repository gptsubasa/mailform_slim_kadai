<?php
use Slim\Container;
use Slim\Http\Request;
use Slim\Http\Response;
use Respect\Validation\Validator as V;

class FormController
{
    private $app;

    public function __construct(Container $app)
    {
        $this->app = $app;
    }

    public function input(Request $request, Response $response)
    {
        $flash = $this->app->flash->getMessages();
        $params = [
            'errors' => isset($flash['errors']) ? $flash['errors'][0] : [],
            'inputs' => isset($flash['inputs']) ? $flash['inputs'][0] : [],
            'csrf_name' => $request->getAttribute('csrf_name'),
            'csrf_value' => $request->getAttribute('csrf_value'),
        ];

        return $this->app->view->render($response, 'form.input', $params);
    }

    public function confirm(Request $request, Response $response, array $args) {
        $router = $this->app->router;
        $inputs = $request->getParsedBody();

        $validator = $this->app->validator->validate($request, [
            'name_sei' => [
                'rules' => V::notEmpty(),
                'message' => 'お名前（姓）を入力してください'
            ],
            'name_mei' => [
                'rules' => V::notEmpty(),
                'message' =>'お名前（名）を入力してください'
            ],
        ]);

        if ($request->getAttribute('csrf_status') === false) {
            $this->app->flash->addMessage('errors', ['csrf' => '既に送信されているか有効期限切れです。']);
            return $response->withRedirect($router->pathFor('input'));
        }

        if ($validator->isValid()) {
            return $this->app->view->render($response, 'form.confirm', $inputs);
        } else {
            $errors = $validator->getErrors();

            $this->app->flash->addMessage('errors', $errors);
            $this->app->flash->addMessage('inputs', $inputs);

            return $response->withRedirect($router->pathFor('input'));
        }
    }
}