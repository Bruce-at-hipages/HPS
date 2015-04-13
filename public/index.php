<?php
/**
 * bootstrap
 * for API
 *
 */
$config = require_once __DIR__ . '/../app/config/config.php';
$app = new \Slim\Slim($config);
$app->response()->header('Content-Type', 'application/json');
// API group

// notification group
$app->group('/api', function () use ($app) {
    // create note
    $api = new \HAPI\Api();
    $app->get('/foo/', function() use ($api) {
        echo $api->getFoo();
    });
    $app->post('/foo/', function() use ($api) {
        echo $api->postFoo();
    });
});


$app->run();
