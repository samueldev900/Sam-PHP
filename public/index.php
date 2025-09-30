<?php 

require_once __DIR__ . '/../vendor/autoload.php';

use App\Core\Router;

// Carrega as rotas
require_once __DIR__ . '/../config/routes.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

Router::dispatch($uri, $method);