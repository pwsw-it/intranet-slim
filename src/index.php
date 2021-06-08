<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;


use function OpenApi\scan;
use Symfony\Component\Yaml\Yaml;

require("../vendor/autoload.php");

$app = AppFactory::create();
$app->addRoutingMiddleware();
$errorMiddleware = $app->addErrorMiddleware(true, true, true);
$twig = Twig::create('../templates', ['cache' => '../cache']);
$app->add(TwigMiddleware::create($app, $twig));


$app->get('/', function (Request $request, Response $response, $args) {
   $view = Twig::fromRequest($request);
        return $view->render($response, 'index.html', []);
});

// swagger
$app->get('/docs/v1', function (Request $request, Response $response, $args) {
    $view = Twig::fromRequest($request);
    $yamlFile = __DIR__ . '/../docs/swagger.yaml';
    $viewData = [
        'spec' =>json_encode(Yaml::parseFile($yamlFile)),
    ];
    return $view->render($response, 'swagger.twig', $viewData);
 });


require_once 'model.php';

$db = new Model();

require_once 'crud.php';
require_once 'api.php';

// Run app
$app->run();


