<?php
use Phalcon\Mvc\Router\Group;
use Phalcon\Mvc\Router;

$router = new Router();
$router->setDefaultModule('frontend');
$router->setDefaultNamespace('Myproject\Frontend\Controllers');

$router->add('/test-url', array(
    'namespace' => 'Myproject\Frontend\Controllers',
    'module' => 'frontend',
    'controller' => 'index',
    'action' => 'index'
));


$modules = [
    'frontend' => [
        'namespace' => 'Myproject\Frontend\Controllers'
    ],
    'backend' => [
        'namespace' => 'Myproject\Backend\Controllers'
    ]
];
foreach ($modules as $key => $module) {
    $namespace = $module["namespace"];
    $router->add('/'.$key.'/:params', array(
        'namespace' => $namespace,
        'module' => $key,
        'controller' => 'index',
        'action' => 'index',
        'params' => 1
    ))->setName($key);
    $router->add('/'.$key.'/:controller/:params', array(
        'namespace' => $namespace,
        'module' => $key,
        'controller' => 1,
        'action' => 'index',
        'params' => 2
    ));
    $router->add('/'.$key.'/:controller/:action/:params', array(
        'namespace' => $namespace,
        'module' => $key,
        'controller' => 1,
        'action' => 2,
        'params' => 3
    ));
}

return $router;

