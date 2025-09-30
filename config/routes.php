<?php 

use App\Core\Router;
use App\Controller\UserController;

Router::get('/', [UserController::class, 'index']);