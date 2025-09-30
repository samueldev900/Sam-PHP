<?php 

require_once '../vendor/autoload.php';

use App\Core\Route;
use App\Controller\UserController;

Route::get('/', [UserController::class, 'index']);

Route::get('/user', [UserController::class, 'index']);