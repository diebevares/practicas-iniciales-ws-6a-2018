<?php
use Slim\Http\Request;
use Slim\Http\Response;

// Routes
$app->get('/', function (Request $request, Response $response, array $args) {
    return $this->response->withJson(array('page' => 'Home'));
});

$app->get('/prueba', function (Request $request, Response $response, array $args) {
    return $this->response->withJson(array('page' => 'Prueba'));
});

$app->get('/test', function (Request $request, Response $response, array $args) {
    return $this->response->withJson(array('page' => 'Test'));
});

?>