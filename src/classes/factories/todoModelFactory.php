<?php

namespace classes\factories;

use \Psr\Container\ContainerInterface as ContainerInterface;
use classes\models\todoModel;

class todoModelFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $db = $container->get('dbConnection');
        return new todoModel($db);
    }

}