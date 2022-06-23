<?php

use App\Models\Database;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\App;
use Slim\Container;

require_once './vendor/autoload.php';
require_once './config/config.php';

$db = new Database();

$config = [
    'settings' => [
        'displayErrorDetails' => true
    ]
];

$container = new Container($config);
$app = new App($container);

$app->get('/',function(Request $request,Response $response, array $args){
    $response->getBody()->write("Все работает!");
});

$app->run();