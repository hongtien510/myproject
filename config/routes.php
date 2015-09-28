<?php

$router = $di->get("router");

/*
$router->add('/test-url', array(
        'namespace' => 'Myproject\Frontend\Controllers',
        'module' => 'frontend',
        'controller' => 'index',
        'action' => 'index'
    ));
*/
foreach ($application->getModules() as $key => $module) {
    $namespace = str_replace('Module','Controllers', $module["className"]);
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

//print_r($router);exit;
