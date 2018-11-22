<?php

namespace classes\controllers;


use Slim\Http\Request;
use Slim\Http\Response;
use Slim\Views\PhpRenderer;
use classes\models\todoModel;

class GetAllTodosController
{
    private $model;
    private $renderer;

    public function __construct(PhpRenderer $renderer,todoModel $todoModel)
    {
        $this->model = $todoModel;
        $this->renderer = $renderer;
    }

    public function __invoke(Request $request,Response $response,array $args)
    {
        $data = $this->model->displayAllTodos();
        $args['todos'] = $data;

        return $this->renderer->render($response, 'index.phtml', $args);
    }
}