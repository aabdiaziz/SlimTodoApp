<?php
/**
 * Created by PhpStorm.
 * User: academy
 * Date: 22/11/2018
 * Time: 10:15
 */

namespace classes\factories;

use Psr\Container\ContainerInterface as ContainerInterface;
use classes\controllers\GetAllTodosController;

class GetAllTodosControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $renderer = $container->get('renderer');
        $todoModel = $container->get('todoModelFactory');
        return new GetAllTodosController($renderer, $todoModel);
    }
}