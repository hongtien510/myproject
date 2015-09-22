<?php

/**
 * Register application modules
 */
$application->registerModules(array(
    'frontend' => array(
        'className' => 'Myproject\Frontend\Module',
        'path' => __DIR__ . '/../apps/frontend/Module.php'
    ),
    'backend' => array(
        'className' => 'Myproject\Backend\Module',
        'path' => __DIR__ . '/../apps/backend/Module.php'
    )
));
